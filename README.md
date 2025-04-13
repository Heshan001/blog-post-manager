<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


<h1>📄 Blog Post Manager</h1>

<p>A lightweight blog post manager built with <strong>Laravel 11</strong> and <strong>Tailwind CSS</strong>. It allows users to create, read, update, and delete posts with pagination and a modern UI.</p>

<hr>

<h2>🚀 Setup Instructions</h2>

<ol>
  <li><strong>Clone the Repository:</strong>
    <pre><code>git clone https://github.com/YOUR-USERNAME/blog-post-manager.git
cd blog-post-manager</code></pre>
  </li>
  <li><strong>Install PHP Dependencies:</strong>
    <pre><code>composer install</code></pre>
  </li>
  <li><strong>Install Node.js Dependencies:</strong>
    <pre><code>npm install
npm run dev</code></pre>
  </li>
  <li><strong>Configure Environment:</strong>
    <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
  </li>
  <li><strong>Set up the Database:</strong>
    <pre><code>php artisan migrate --seed</code></pre>
  </li>
  <li><strong>Start the Development Server:</strong>
    <pre><code>php artisan serve</code></pre>
  </li>
</ol>

<hr>

<h2>🖼️ UI Screenshots</h2>

<p><strong>Dashboard</strong></p>
<img src="screenshots/dashboard.png" width="100%" alt="Dashboard"> <br>

<p><strong>Create New Post</strong></p>
<img src="screenshots/create post.png" width="100%" alt="Create Post"><br>

<p><strong>view single post</strong></p>
<img src="screenshots/view single post.png" width="100%" alt="view single post"><br>

<p><strong>edit post</strong></p>
<img src="screenshots/edit post.png" width="100%" alt="Cedit post"><br>

<p><strong>flash message after create new post</strong></p>
<img src="screenshots/flash message after create new post.png" width="100%" alt="flash message after create new post"><br>

<p><strong>delete confirmation</strong></p>
<img src="screenshots/delete confirmation.png" width="100%" alt="delete confirmation"><br>

<p><strong>post delete flash message</strong></p>
<img src="screenshots/post delete flash message.png" width="100%" alt="post delete flash message"><br>

<p><strong>pagination 1 page max 5 posts</strong></p>
<img src="screenshots/pagination 1 page max 5 posts.png" width="100%" alt="pagination 1 page max 5 posts"><br>


<hr>

<h2>📌 Features</h2>

<ul>
  <li>Laravel 11 with Eloquent ORM</li>
  <li>Tailwind CSS UI</li>
  <li>CRUD (Create, Read, Update, Delete)</li>
  <li>Pagination with page-aware delete</li>
  <li>Flash messages & error handling</li>
  <li>Clean Git-based project structure</li>
</ul>

<hr>

<h2>📂 Folder Structure</h2>

<ul>
  <li><code>/resources/views</code> – Blade templates</li>
  <li><code>/routes/web.php</code> – Route definitions</li>
  <li><code>/app/Http/Controllers/PostController.php</code> – Logic controller</li>
</ul>

<hr>

<h2>📌 Evaluation Criteria</h2>

<ul>
  <li>✅ Proper use of Laravel 11 features</li>
  <li>✅ Tailwind layout and styling</li>
  <li>✅ Clean, maintainable code</li>
  <li>✅ Basic validation and error handling</li>
  <li>✅ Git project structure</li>
</ul>

<hr>

<h2>📫 Contact</h2>

<p>Developed by <strong>Supun Abayarathna </strong> </p>

