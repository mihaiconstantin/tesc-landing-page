<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarouselSectionsTableSeeder::class);
        $this->call(AboutSectionsTableSeeder::class);
        $this->call(PeopleSectionsTableSeeder::class);
        $this->call(ProjectSectionsTableSeeder::class);
        $this->call(ContactMessagesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);

        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);

        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);

        $this->call(SettingsTableSeeder::class);
    }
}
