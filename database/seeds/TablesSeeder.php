<?php

use Illuminate\Database\Seeder;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            [
                [
                    'name'=>'home',
                    'alias'=>'home',
                    'text'=>'<h2>We create <strong>awesome</strong> web templates</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text  printer took a galley of type and scrambled it to make a type specimen.</p>',
                    'images'=>'main_device_image.png',
                ],
                [
                    'name'=>'about us',
                    'alias'=>'aboutUs',
                    'text'=>'<h3>Lorem Ipsum has been the industry\'s standard dummy text ever..</h3>
<br>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p>
<br>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>',
                    'images'=>'about-img.jpg',
                ],
            ]
        );

        DB::table('portfolios')->insert(
            [
                [
                    'name'=>'SMS Mobile APP',
                    'filter'=>'appleIOS',
                    'images'=>'portfolio_pic1.jpg',
                ],
                [
                    'name'=>'Finance App',
                    'filter'=>'design',
                    'images'=>'portfolio_pic2.jpg',
                ],
                [
                    'name'=>'Concept',
                    'filter'=>'design',
                    'images'=>'portfolio_pic3.jpg',
                ],
                [
                    'name'=>'Shopping',
                    'filter'=>'android',
                    'images'=>'portfolio_pic4.jpg',
                ],
                [
                    'name'=>'Managment',
                    'filter'=>'design',
                    'images'=>'portfolio_pic5.jpg',
                ],
                [
                    'name'=>'iPhone',
                    'filter'=>'web',
                    'images'=>'portfolio_pic6.jpg',
                ],
                [
                    'name'=>'Nexus',
                    'filter'=>'web',
                    'images'=>'portfolio_pic7.jpg',
                ],
                [
                    'name'=>'Android',
                    'filter'=>'android',
                    'images'=>'portfolio_pic8.jpg',
                ],
            ]
        );

        DB::table('services')->insert(
            [
                [
                    'name'=>'Android',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon'=>'fa-android',
                ],
                [
                    'name'=>'Apple IOS',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon'=>'fa-apple',
                ],
                [
                    'name'=>'Design',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon'=>'fa-dropbox',
                ],
                [
                    'name'=>'Concept',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon'=>'fa-html5',
                ],
                [
                    'name'=>'User Research',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon'=>'fa-slack',
                ],
                [
                    'name'=>'User Experience',
                    'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    'icon'=>'fa-users',
                ],
            ]
        );

        DB::table('peoples')->insert(
            [
                [
                    'name'=>'Tom Rensed',
                    'position'=>'Chief Executive',
                    'images'=>'team_pic1.jpg',
                    'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                ],
                [
                    'name'=>'Kathren Mory',
                    'position'=>'Vice President',
                    'images'=>'team_pic2.jpg',
                    'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                ],
                [
                    'name'=>'Lancer Jack',
                    'position'=>'Senior Manager',
                    'images'=>'team_pic3.jpg',
                    'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
                ],
            ]
        );
    }
}
