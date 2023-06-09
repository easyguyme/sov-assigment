# [Laravel assignment](https://sovtech.com/)


## Table of Contents

* [Prerequisites](#prerequisites)
* [Installation](#installation)
* [Usage](#usage)
* [Demo](#demo)
* [Login](#login)
* [Register](#register)
* [Forgot Password](#forgot-password)
* [Reset Password](#reset-password)
* [User Profile](#user-profile)
* [Dashboard](#dashboard)
* [File Structure](#file-structure)
* [Browser Support](#browser-support)
* [Credits](#credits)

## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

 - Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/

Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md   
And Laravel: https://laravel.com/docs/9.x/installation


## Installation

1. cd to the cloned repository
2. In your terminal run `composer install`
4. Copy `.env.example` to `.env` and updated the configurations (mainly the database configuration)
5. In your terminal run `php artisan key:generate`
6. Run `php artisan migrate --seed` to create the database tables and seed the roles and users tables
7. Run `php artisan storage:link` to create the storage symlink (if you are using **Vagrant** with **Homestead** for development, remember to ssh into your virtual machine and run the command from there).

## Usage
Register a user or login with default user **admin@admin.com** and password **password** from your database and start testing (make sure to run the migrations and seeders for these credentials to be available).

Besides the dashboard, the auth pages, the billing and table pages, there is also has an edit profile page. All the necessary files are installed out of the box and all the needed routes are added to `routes/web.php`. Keep in mind that all of the features can be viewed once you login using the credentials provided or by registering your own user. 


## Demo

[demo](https://app.mitchsofts.com/)


### Login
If you are not logged in you can only access this page or the Sign Up page. The default url takes you to the login page where you use the default credentials **admin@admin.com** with the password **password**. Logging in is possible only with already existing credentials. For this to work you should have run the migrations.

The `App\Http\Controllers\SessionController` handles the logging in of an existing user.

```
       public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            return redirect('dashboard');
        }
        else{

            return back();
        }
    }
```

### Register
You can register as a user by filling in the name, email, role and password for your account. For your role you can choose between the Admin, Creator and Member. It is important to know that an admin user has access to all the pages and actions, can delete, add and edit another users, other roles, items, tags or categories; a creator user has acces to category, tag and item managemen, but can not add, edit or delete other users; a member user has access to the item management but can not take any action. You can do this by accessing the sign up page from the "**Sign Up**" button in the top navbar or by clicking the "**Sign Up**" button from the bottom of the log in form. Another simple way is adding **/register** in the url.

The `App\Http\Controllers\RegisterController` handles the registration of a new user.

```
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'agreement' => ['accepted']
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );

        session()->flash('success', 'Your account has been created.');
        $user = User::create($attributes);
        Auth::login($user); 
        return redirect('/dashboard');
    }
```

### Forgot Password
If a user forgets the account's password it is possible to reset the password. For this the user should click on the "**here**" under the login form or add **/login/forgot-password** in the url.

The `App\Http\Controllers\ResetController` takes care of sending an email to the user where he can reset the password afterwards.

```
    public function sendEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }
```

### Reset Password
The user who forgot the password gets an email on the account's email address. The user can access the reset password page by clicking the button found in the email. The link for resetting the password is available for 12 hours. The user must add the new password and confirm the password for his password to be updated. The user is redirected to the login page.

The `App\Http\Controllers\ChangePasswordController` helps the user reset the password.

```
    public function changePassword(Request $request)
    {
        
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));
            }
        );
    
        return $status === Password::PASSWORD_RESET
                    ? redirect('/login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
```

### My Profile
The profile can be accessed by a logged in user by clicking "**User Profile**" from the sidebar or adding **/user-profile** in the url. The user can add information like birthday, gender, phone number, location, language  or skills.

The `App\Http\Controllers\InfoUserController` handles the user's profile information.

```
    public function store(Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            'phone'     => ['max:50'],
            'location' => ['max:70'],
            'about_me'    => ['max:150'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
        ]);
        
        User::where('id',Auth::user()->id)
        ->update([
            'name'    => $attributes['name'],
            'email' => $attribute['email'],
            'phone'     => $attributes['phone'],
            'location' => $attributes['location'],
            'about_me'    => $attributes["about_me"],
        ]);

        return redirect('/user-profile');
    }
```

### Dashboard
You can access the dashboard either by using the "**Dashboard**" link in the left sidebar or by adding **/dashboard** in the url after logging in. 

## File Structure
```
app
├── Console
│   └── Kernel.php
├── Exceptions
│   └── Handler.php
├── Http
│   ├── Controllers
│   │   └── ChangePasswordController.php
│   │   └──Controller.php
│   │   └──HomeController.php
│   │   └──InfoUserController.php
│   │   └──RegisterController.php
│   │   └──ResetController.php
│   │   └──SessionController.php
│   │   └──PostController.php
│   ├── Kernel.php
│   └── Middleware
│       ├── Authenticate.php
│       ├── EncryptCookies.php
│       ├── PreventRequestsDuringMaintenance.php
│       ├── RedirectIfAuthenticated.php
│       ├── TrimStrings.php
│       ├── TrustHosts.php
│       ├── TrustProxies.php
│       └── VerifyCsrfToken.php
├── Models
│   └── User.php
├── Policies
│   └── UsersPolicy.php
├── Providers
│   ├── AppServiceProvider.php
│   ├── AuthServiceProvider.php
│   ├── BroadcastServiceProvider.php
│   ├── EventServiceProvider.php
│   └── RouteServiceProvider.php
config
├── app.php
├── auth.php
├── broadcasting.php
├── cache.php
├── cors.php
├── database.php
├── filesystems.php
├── hashing.php
├── logging.php
├── mail.php
├── queue.php
├── sanctum.php
├── services.php
├── session.php
├── view.php
|       
database
|   ├──factories
|   |       UserFactory.php
|   |       
|   ├──migrations
|   |       2014_10_12_000000_create_users_table.php
|   |       2014_10_12_100000_create_password_resets_table.php
|   |       2019_08_19_000000_create_failed_jobs_table.php
|   |       2019_12_14_000001_create_personal_access_tokens_table.php
|   |       
|   └──seeds
|           DatabaseSeeder.php
|           UserSeeder.php
|           
+---public
|   |   .htaccess
|   |   favicon.ico
|   |   index.php
|   |   
|   +---css
|   |       app.css
|   |       soft-ui-dashboard.css
|   +---js
|   |       app.js
|   |       
|   +---assets
|   |       demo.css
|   |       docs-soft.css
|   |       docs.js
|   |
|   |   +---css
|   |   |   |   nucleo-icons.css
|   |   |   |   nucleo-svg.css
|   |   |   |   soft-ui-dashboard.css
|   |   |   |   soft-ui-dashboard.css.map
|   |   |   └── soft-ui-dashboard.min.css
|   |   |                                 
|   +---+---js
|           |   soft-ui--dashboard.js
|           |   soft-ui--dashboard.js.map
|           |   soft-ui--dashboard.min.js
|           |   
|           +---core
|                   bootstrap.bundle.min.js
|                   bootstrap.min.js
|                   popper.min.js
|                    
+---resources
|   +---lang
|   |   \---en
|   |           auth.php
|   |           pagination.php
|   |           passwords.php
|   |           validation.php
|   |           
|   \---views
|       |                 
|       +---components
|       |       fixed-plugins.blade.php
|       |      
|       +---laravel-example
|       |        user-management.blade.php
|       |        user-profile.blade.php
|       |      
|       +---layouts
|       |   |   
|       |   +---footers
|       |   |   |
|       |   |   +--auth
|       |   |   |     footer.blade.php
|       |   |   +--guest
|       |   |         footer.blade.php
|       |   |
|       |   +---navbars
|       |       |  app.blade.php
|       |       |
|       |       +--auth
|       |       |     nav-rtl.blade.php
|       |       |     nav.blade.php
|       |       |     sidebar-rtl.blade.php
|       |       |     sidebar.blade.php
|       |       +--guest
|       |       |     nav.blade.php
|       |       |     
|       |       +--user_type
|       |           auth.blade.php
|       |           guest.blade.php
|       |           
|       +---session
|       |   |   login-session.blade.php
|       |   |   register.blade.php
|       |   |   
|       |   +---reset-password
|       |           resetPassword.blade.php
|       |           sendEmail.blade.php
|       |       
|       billing.blade.php
|       dashboard.blade.php
|       profile.blade.php
|       rtl.blade.php
|       static-sign-in.blade.php
|       static-sign-up.blade.php
|       tables.blade.php
|       virtual-reality.blade.php
|                      
+---routes
|       api.php
|       channels.php
|       console.php
|       web.php
```

## Browser Support
At present, we officially aim to support the last two versions of the following browsers:

<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">




## Credits

- [Creative Tim](https://creative-tim.com/?ref=sudl-readme)
- [UPDIVISION](https://updivision.com)
