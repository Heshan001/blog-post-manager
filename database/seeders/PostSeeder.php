// In database/seeders/PostSeeder.php
use App\Models\Post;

public function run()
{
    Post::factory()->count(10)->create();  // Create 10 dummy posts
}
