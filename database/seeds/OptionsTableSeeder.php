<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'option_id' => 1,
                'option_name' => 'siteurl',
                'option_value' => env('APP_URL').'/wordpress',
                'autoload' => 'yes',
            ),
            1 => 
            array (
                'option_id' => 2,
                'option_name' => 'home',
                'option_value' => env('APP_URL').'/wordpress',
                'autoload' => 'yes',
            ),
            2 => 
            array (
                'option_id' => 3,
                'option_name' => 'blogname',
                'option_value' => 'Animadness Blog',
                'autoload' => 'yes',
            ),
            3 => 
            array (
                'option_id' => 4,
                'option_name' => 'blogdescription',
                'option_value' => 'Let&#039;s Talk Anime',
                'autoload' => 'yes',
            ),
            4 => 
            array (
                'option_id' => 5,
                'option_name' => 'users_can_register',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            5 => 
            array (
                'option_id' => 6,
                'option_name' => 'admin_email',
                'option_value' => 'info@madnesslabs.net',
                'autoload' => 'yes',
            ),
            6 => 
            array (
                'option_id' => 7,
                'option_name' => 'start_of_week',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            7 => 
            array (
                'option_id' => 8,
                'option_name' => 'use_balanceTags',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            8 => 
            array (
                'option_id' => 9,
                'option_name' => 'use_smilies',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            9 => 
            array (
                'option_id' => 10,
                'option_name' => 'require_name_email',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            10 => 
            array (
                'option_id' => 11,
                'option_name' => 'comments_notify',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            11 => 
            array (
                'option_id' => 12,
                'option_name' => 'posts_per_rss',
                'option_value' => '10',
                'autoload' => 'yes',
            ),
            12 => 
            array (
                'option_id' => 13,
                'option_name' => 'rss_use_excerpt',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            13 => 
            array (
                'option_id' => 14,
                'option_name' => 'mailserver_url',
                'option_value' => 'mail.example.com',
                'autoload' => 'yes',
            ),
            14 => 
            array (
                'option_id' => 15,
                'option_name' => 'mailserver_login',
                'option_value' => 'login@example.com',
                'autoload' => 'yes',
            ),
            15 => 
            array (
                'option_id' => 16,
                'option_name' => 'mailserver_pass',
                'option_value' => 'password',
                'autoload' => 'yes',
            ),
            16 => 
            array (
                'option_id' => 17,
                'option_name' => 'mailserver_port',
                'option_value' => '110',
                'autoload' => 'yes',
            ),
            17 => 
            array (
                'option_id' => 18,
                'option_name' => 'default_category',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            18 => 
            array (
                'option_id' => 19,
                'option_name' => 'default_comment_status',
                'option_value' => 'open',
                'autoload' => 'yes',
            ),
            19 => 
            array (
                'option_id' => 20,
                'option_name' => 'default_ping_status',
                'option_value' => 'open',
                'autoload' => 'yes',
            ),
            20 => 
            array (
                'option_id' => 21,
                'option_name' => 'default_pingback_flag',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            21 => 
            array (
                'option_id' => 22,
                'option_name' => 'posts_per_page',
                'option_value' => '10',
                'autoload' => 'yes',
            ),
            22 => 
            array (
                'option_id' => 23,
                'option_name' => 'date_format',
                'option_value' => 'F j, Y',
                'autoload' => 'yes',
            ),
            23 => 
            array (
                'option_id' => 24,
                'option_name' => 'time_format',
                'option_value' => 'g:i a',
                'autoload' => 'yes',
            ),
            24 => 
            array (
                'option_id' => 25,
                'option_name' => 'links_updated_date_format',
                'option_value' => 'F j, Y g:i a',
                'autoload' => 'yes',
            ),
            25 => 
            array (
                'option_id' => 26,
                'option_name' => 'comment_moderation',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            26 => 
            array (
                'option_id' => 27,
                'option_name' => 'moderation_notify',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            27 => 
            array (
                'option_id' => 28,
                'option_name' => 'permalink_structure',
                'option_value' => '/%year%/%monthnum%/%day%/%postname%/',
                'autoload' => 'yes',
            ),
            28 => 
            array (
                'option_id' => 29,
                'option_name' => 'rewrite_rules',
            'option_value' => 'a:89:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:21:"^index.php/wp-json/?$";s:22:"index.php?rest_route=/";s:24:"^index.php/wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}',
                'autoload' => 'yes',
            ),
            29 => 
            array (
                'option_id' => 30,
                'option_name' => 'hack_file',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            30 => 
            array (
                'option_id' => 31,
                'option_name' => 'blog_charset',
                'option_value' => 'UTF-8',
                'autoload' => 'yes',
            ),
            31 => 
            array (
                'option_id' => 32,
                'option_name' => 'moderation_keys',
                'option_value' => '',
                'autoload' => 'no',
            ),
            32 => 
            array (
                'option_id' => 33,
                'option_name' => 'active_plugins',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),
            33 => 
            array (
                'option_id' => 34,
                'option_name' => 'category_base',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            34 => 
            array (
                'option_id' => 35,
                'option_name' => 'ping_sites',
                'option_value' => 'http://rpc.pingomatic.com/',
                'autoload' => 'yes',
            ),
            35 => 
            array (
                'option_id' => 36,
                'option_name' => 'comment_max_links',
                'option_value' => '2',
                'autoload' => 'yes',
            ),
            36 => 
            array (
                'option_id' => 37,
                'option_name' => 'gmt_offset',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            37 => 
            array (
                'option_id' => 38,
                'option_name' => 'default_email_category',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            38 => 
            array (
                'option_id' => 39,
                'option_name' => 'recently_edited',
                'option_value' => '',
                'autoload' => 'no',
            ),
            39 => 
            array (
                'option_id' => 40,
                'option_name' => 'template',
                'option_value' => 'twentyseventeen',
                'autoload' => 'yes',
            ),
            40 => 
            array (
                'option_id' => 41,
                'option_name' => 'stylesheet',
                'option_value' => 'twentyseventeen',
                'autoload' => 'yes',
            ),
            41 => 
            array (
                'option_id' => 42,
                'option_name' => 'comment_whitelist',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            42 => 
            array (
                'option_id' => 43,
                'option_name' => 'blacklist_keys',
                'option_value' => '',
                'autoload' => 'no',
            ),
            43 => 
            array (
                'option_id' => 44,
                'option_name' => 'comment_registration',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            44 => 
            array (
                'option_id' => 45,
                'option_name' => 'html_type',
                'option_value' => 'text/html',
                'autoload' => 'yes',
            ),
            45 => 
            array (
                'option_id' => 46,
                'option_name' => 'use_trackback',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            46 => 
            array (
                'option_id' => 47,
                'option_name' => 'default_role',
                'option_value' => 'subscriber',
                'autoload' => 'yes',
            ),
            47 => 
            array (
                'option_id' => 48,
                'option_name' => 'db_version',
                'option_value' => '38590',
                'autoload' => 'yes',
            ),
            48 => 
            array (
                'option_id' => 49,
                'option_name' => 'uploads_use_yearmonth_folders',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            49 => 
            array (
                'option_id' => 50,
                'option_name' => 'upload_path',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            50 => 
            array (
                'option_id' => 51,
                'option_name' => 'blog_public',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            51 => 
            array (
                'option_id' => 52,
                'option_name' => 'default_link_category',
                'option_value' => '2',
                'autoload' => 'yes',
            ),
            52 => 
            array (
                'option_id' => 53,
                'option_name' => 'show_on_front',
                'option_value' => 'posts',
                'autoload' => 'yes',
            ),
            53 => 
            array (
                'option_id' => 54,
                'option_name' => 'tag_base',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            54 => 
            array (
                'option_id' => 55,
                'option_name' => 'show_avatars',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            55 => 
            array (
                'option_id' => 56,
                'option_name' => 'avatar_rating',
                'option_value' => 'G',
                'autoload' => 'yes',
            ),
            56 => 
            array (
                'option_id' => 57,
                'option_name' => 'upload_url_path',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            57 => 
            array (
                'option_id' => 58,
                'option_name' => 'thumbnail_size_w',
                'option_value' => '150',
                'autoload' => 'yes',
            ),
            58 => 
            array (
                'option_id' => 59,
                'option_name' => 'thumbnail_size_h',
                'option_value' => '150',
                'autoload' => 'yes',
            ),
            59 => 
            array (
                'option_id' => 60,
                'option_name' => 'thumbnail_crop',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            60 => 
            array (
                'option_id' => 61,
                'option_name' => 'medium_size_w',
                'option_value' => '300',
                'autoload' => 'yes',
            ),
            61 => 
            array (
                'option_id' => 62,
                'option_name' => 'medium_size_h',
                'option_value' => '300',
                'autoload' => 'yes',
            ),
            62 => 
            array (
                'option_id' => 63,
                'option_name' => 'avatar_default',
                'option_value' => 'mystery',
                'autoload' => 'yes',
            ),
            63 => 
            array (
                'option_id' => 64,
                'option_name' => 'large_size_w',
                'option_value' => '1024',
                'autoload' => 'yes',
            ),
            64 => 
            array (
                'option_id' => 65,
                'option_name' => 'large_size_h',
                'option_value' => '1024',
                'autoload' => 'yes',
            ),
            65 => 
            array (
                'option_id' => 66,
                'option_name' => 'image_default_link_type',
                'option_value' => 'none',
                'autoload' => 'yes',
            ),
            66 => 
            array (
                'option_id' => 67,
                'option_name' => 'image_default_size',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            67 => 
            array (
                'option_id' => 68,
                'option_name' => 'image_default_align',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            68 => 
            array (
                'option_id' => 69,
                'option_name' => 'close_comments_for_old_posts',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            69 => 
            array (
                'option_id' => 70,
                'option_name' => 'close_comments_days_old',
                'option_value' => '14',
                'autoload' => 'yes',
            ),
            70 => 
            array (
                'option_id' => 71,
                'option_name' => 'thread_comments',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            71 => 
            array (
                'option_id' => 72,
                'option_name' => 'thread_comments_depth',
                'option_value' => '5',
                'autoload' => 'yes',
            ),
            72 => 
            array (
                'option_id' => 73,
                'option_name' => 'page_comments',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            73 => 
            array (
                'option_id' => 74,
                'option_name' => 'comments_per_page',
                'option_value' => '50',
                'autoload' => 'yes',
            ),
            74 => 
            array (
                'option_id' => 75,
                'option_name' => 'default_comments_page',
                'option_value' => 'newest',
                'autoload' => 'yes',
            ),
            75 => 
            array (
                'option_id' => 76,
                'option_name' => 'comment_order',
                'option_value' => 'asc',
                'autoload' => 'yes',
            ),
            76 => 
            array (
                'option_id' => 77,
                'option_name' => 'sticky_posts',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),
            77 => 
            array (
                'option_id' => 78,
                'option_name' => 'widget_categories',
                'option_value' => 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            78 => 
            array (
                'option_id' => 79,
                'option_name' => 'widget_text',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),
            79 => 
            array (
                'option_id' => 80,
                'option_name' => 'widget_rss',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),
            80 => 
            array (
                'option_id' => 81,
                'option_name' => 'uninstall_plugins',
                'option_value' => 'a:0:{}',
                'autoload' => 'no',
            ),
            81 => 
            array (
                'option_id' => 82,
                'option_name' => 'timezone_string',
                'option_value' => '',
                'autoload' => 'yes',
            ),
            82 => 
            array (
                'option_id' => 83,
                'option_name' => 'page_for_posts',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            83 => 
            array (
                'option_id' => 84,
                'option_name' => 'page_on_front',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            84 => 
            array (
                'option_id' => 85,
                'option_name' => 'default_post_format',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            85 => 
            array (
                'option_id' => 86,
                'option_name' => 'link_manager_enabled',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            86 => 
            array (
                'option_id' => 87,
                'option_name' => 'finished_splitting_shared_terms',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            87 => 
            array (
                'option_id' => 88,
                'option_name' => 'site_icon',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            88 => 
            array (
                'option_id' => 89,
                'option_name' => 'medium_large_size_w',
                'option_value' => '768',
                'autoload' => 'yes',
            ),
            89 => 
            array (
                'option_id' => 90,
                'option_name' => 'medium_large_size_h',
                'option_value' => '0',
                'autoload' => 'yes',
            ),
            90 => 
            array (
                'option_id' => 91,
                'option_name' => 'initial_db_version',
                'option_value' => '38590',
                'autoload' => 'yes',
            ),
            91 => 
            array (
                'option_id' => 92,
                'option_name' => 'wp_user_roles',
                'option_value' => 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:61:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}',
                'autoload' => 'yes',
            ),
            92 => 
            array (
                'option_id' => 93,
                'option_name' => 'fresh_site',
                'option_value' => '1',
                'autoload' => 'yes',
            ),
            93 => 
            array (
                'option_id' => 94,
                'option_name' => 'widget_search',
                'option_value' => 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            94 => 
            array (
                'option_id' => 95,
                'option_name' => 'widget_recent-posts',
                'option_value' => 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            95 => 
            array (
                'option_id' => 96,
                'option_name' => 'widget_recent-comments',
                'option_value' => 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            96 => 
            array (
                'option_id' => 97,
                'option_name' => 'widget_archives',
                'option_value' => 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            97 => 
            array (
                'option_id' => 98,
                'option_name' => 'widget_meta',
                'option_value' => 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            98 => 
            array (
                'option_id' => 99,
                'option_name' => 'sidebars_widgets',
                'option_value' => 'a:5:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:9:"sidebar-2";a:0:{}s:9:"sidebar-3";a:0:{}s:13:"array_version";i:3;}',
                'autoload' => 'yes',
            ),
            99 => 
            array (
                'option_id' => 100,
                'option_name' => 'widget_pages',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            100 => 
            array (
                'option_id' => 101,
                'option_name' => 'widget_calendar',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            101 => 
            array (
                'option_id' => 102,
                'option_name' => 'widget_tag_cloud',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            102 => 
            array (
                'option_id' => 103,
                'option_name' => 'widget_nav_menu',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ),
            103 => 
            array (
                'option_id' => 104,
                'option_name' => 'cron',
                'option_value' => 'a:3:{i:1484033013;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1484076253;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}',
                'autoload' => 'yes',
            ),
            104 => 
            array (
                'option_id' => 105,
                'option_name' => 'theme_mods_twentyseventeen',
                'option_value' => 'a:1:{s:18:"custom_css_post_id";i:-1;}',
                'autoload' => 'yes',
            ),
            105 => 
            array (
                'option_id' => 109,
                'option_name' => '_site_transient_update_core',
                'option_value' => 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:57:"https://downloads.wordpress.org/release/wordpress-4.7.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:57:"https://downloads.wordpress.org/release/wordpress-4.7.zip";s:10:"no_content";s:68:"https://downloads.wordpress.org/release/wordpress-4.7-no-content.zip";s:11:"new_bundled";s:69:"https://downloads.wordpress.org/release/wordpress-4.7-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:3:"4.7";s:7:"version";s:3:"4.7";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1483989815;s:15:"version_checked";s:3:"4.7";s:12:"translations";a:0:{}}',
                'autoload' => 'no',
            ),
            106 => 
            array (
                'option_id' => 111,
                'option_name' => '_site_transient_update_plugins',
                'option_value' => 'O:8:"stdClass":4:{s:12:"last_checked";i:1483989817;s:8:"response";a:0:{}s:12:"translations";a:0:{}s:9:"no_update";a:2:{s:19:"akismet/akismet.php";O:8:"stdClass":6:{s:2:"id";s:2:"15";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:3:"3.2";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:54:"https://downloads.wordpress.org/plugin/akismet.3.2.zip";}s:9:"hello.php";O:8:"stdClass":6:{s:2:"id";s:4:"3564";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:9:"hello.php";s:11:"new_version";s:3:"1.6";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:58:"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip";}}}',
                'autoload' => 'no',
            ),
            107 => 
            array (
                'option_id' => 112,
                'option_name' => '_site_transient_timeout_theme_roots',
                'option_value' => '1483991615',
                'autoload' => 'no',
            ),
            108 => 
            array (
                'option_id' => 113,
                'option_name' => '_site_transient_theme_roots',
                'option_value' => 'a:3:{s:13:"twentyfifteen";s:7:"/themes";s:15:"twentyseventeen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}',
                'autoload' => 'no',
            ),
            109 => 
            array (
                'option_id' => 114,
                'option_name' => '_site_transient_update_themes',
                'option_value' => 'O:8:"stdClass":4:{s:12:"last_checked";i:1483989818;s:7:"checked";a:3:{s:13:"twentyfifteen";s:3:"1.7";s:15:"twentyseventeen";s:3:"1.0";s:13:"twentysixteen";s:3:"1.3";}s:8:"response";a:0:{}s:12:"translations";a:0:{}}',
                'autoload' => 'no',
            ),
            110 => 
            array (
                'option_id' => 115,
                'option_name' => '_site_transient_timeout_browser_3724cf524ce46cd3376f6aebb4c04837',
                'option_value' => '1484594653',
                'autoload' => 'no',
            ),
            111 => 
            array (
                'option_id' => 116,
                'option_name' => '_site_transient_browser_3724cf524ce46cd3376f6aebb4c04837',
                'option_value' => 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"55.0.2883.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}',
                'autoload' => 'no',
            ),
            112 => 
            array (
                'option_id' => 118,
                'option_name' => 'can_compress_scripts',
                'option_value' => '1',
                'autoload' => 'no',
            ),
            113 => 
            array (
                'option_id' => 119,
                'option_name' => '_transient_timeout_feed_ac0b00fe65abe10e0c5b588f3ed8c7ca',
                'option_value' => '1484033055',
                'autoload' => 'no',
            ),
            114 => 
            array (
                'option_id' => 120,
                'option_name' => '_transient_feed_ac0b00fe65abe10e0c5b588f3ed8c7ca',
                'option_value' => 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"


";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:49:"



















";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"WordPress News";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:26:"https://wordpress.org/news";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:14:"WordPress News";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:13:"lastBuildDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 06 Dec 2016 19:27:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:5:"en-US";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:40:"https://wordpress.org/?v=4.8-alpha-39755";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:10:{i:0;a:6:{s:4:"data";s:36:"












";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:27:"WordPress 4.7 “Vaughan”";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:43:"https://wordpress.org/news/2016/12/vaughan/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 06 Dec 2016 19:27:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4596";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:240:"Version 4.7 of WordPress, named “Vaughan” in honor of legendary jazz vocalist Sarah "Sassy" Vaughan, is available for download or update in your WordPress dashboard. New features in 4.7 help you get your site set up the way you want it.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"enclosure";a:3:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:3:"url";s:60:"https://wordpress.org/news/files/2016/12/starter-content.mp4";s:6:"length";s:7:"3736020";s:4:"type";s:9:"video/mp4";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:3:"url";s:59:"https://wordpress.org/news/files/2016/12/edit-shortcuts.mp4";s:6:"length";s:7:"1127483";s:4:"type";s:9:"video/mp4";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:2;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:3:"url";s:58:"https://wordpress.org/news/files/2016/12/video-headers.mp4";s:6:"length";s:7:"1549803";s:4:"type";s:9:"video/mp4";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Helen Hou-Sandi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:44700:"<p>Version 4.7 of WordPress, named “Vaughan” in honor of legendary jazz vocalist Sarah &#8220;Sassy&#8221; Vaughan, is available for download or update in your WordPress dashboard. New features in 4.7 help you get your site set up the way you want it.</p>
<div id="v-AHz0Ca46-1" class="video-player"><video id="v-AHz0Ca46-1-video" width="632" height="354" poster="https://videos.files.wordpress.com/AHz0Ca46/wp4-7-vaughan-r8-mastered_scruberthumbnail_0.jpg" controls="true" preload="metadata" dir="ltr" lang="en"><source src="https://videos.files.wordpress.com/AHz0Ca46/wp4-7-vaughan-r8-mastered_dvd.mp4" type="video/mp4; codecs=&quot;avc1.64001E, mp4a.40.2&quot;" /><source src="https://videos.files.wordpress.com/AHz0Ca46/wp4-7-vaughan-r8-mastered_fmt1.ogv" type="video/ogg; codecs=&quot;theora, vorbis&quot;" /><div><img alt="Introducing WordPress 4.7" src="https://i1.wp.com/videos.files.wordpress.com/AHz0Ca46/wp4-7-vaughan-r8-mastered_scruberthumbnail_0.jpg?resize=632%2C354&#038;ssl=1" data-recalc-dims="1" /></div><p>Introducing WordPress 4.7</p></video></div>
<hr />
<h2 style="text-align:center">Presenting Twenty Seventeen</h2>
<p>A brand new default theme brings your site to life with immersive featured images and video headers.</p>
<p><img class="alignnone wp-image-4618 size-large" src="https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Twenty-Seventeen-1.jpg?resize=632%2C356&#038;ssl=1" srcset="https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Twenty-Seventeen-1.jpg?resize=1024%2C576&amp;ssl=1 1024w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Twenty-Seventeen-1.jpg?resize=300%2C169&amp;ssl=1 300w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Twenty-Seventeen-1.jpg?resize=768%2C432&amp;ssl=1 768w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Twenty-Seventeen-1.jpg?w=1600&amp;ssl=1 1600w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Twenty-Seventeen-1.jpg?w=1264&amp;ssl=1 1264w" sizes="(max-width: 632px) 100vw, 632px" data-recalc-dims="1" /></p>
<p>Twenty Seventeen focuses on business sites and features a customizable front page with multiple sections. Personalize it with widgets, navigation, social menus, a logo, custom colors, and more. Our default theme for 2017 works great in many languages, on any device, and for a wide range of users.</p>
<hr />
<h2 style="text-align:center">Your Site, Your Way</h2>
<p>WordPress 4.7 adds new features to the customizer to help take you through the initial setup of a theme, with non-destructive live previews of all your changes in one uninterrupted workflow.</p>
<h3>Theme Starter Content</h3>
<div style="width: 632px;" class="wp-video"><!--[if lt IE 9]><script>document.createElement(\'video\');</script><![endif]-->
<video class="wp-video-shortcode" id="video-4596-1" width="632" height="346" loop="1" autoplay="1" preload="metadata" controls="controls"><source type="video/mp4" src="https://wordpress.org/news/files/2016/12/starter-content.mp4?_=1" /><a href="https://wordpress.org/news/files/2016/12/starter-content.mp4">https://wordpress.org/news/files/2016/12/starter-content.mp4</a></video></div>
<p>To help give you a solid base to build from, individual themes can provide starter content that appears when you go to customize your brand new site. This can range from placing a business information widget in the best location to providing a sample menu with social icon links to a static front page complete with beautiful images. Don’t worry &#8211; nothing new will appear on the live site until you’re ready to save and publish your initial theme setup.</p>
<div style="float: left;width: 48%;margin: 0">
<h3>Edit Shortcuts</h3>
<div style="width: 300px;" class="wp-video"><video class="wp-video-shortcode" id="video-4596-2" width="300" height="173" poster="https://wordpress.org/news/files/2016/12/4.7-—-Edit-Shortcuts.jpg" loop="1" autoplay="1" preload="metadata" controls="controls"><source type="video/mp4" src="https://wordpress.org/news/files/2016/12/edit-shortcuts.mp4?_=2" /><a href="https://wordpress.org/news/files/2016/12/edit-shortcuts.mp4">https://wordpress.org/news/files/2016/12/edit-shortcuts.mp4</a></video></div>
<p>Visible icons appear to show you which parts of your site can be customized while live previewing. Click on a shortcut and get straight to editing. Paired with starter content, getting started with customizing your site is faster than ever.</p>
</div>
<div style="float: right;width: 48%;margin: 0">
<h3>Video Headers</h3>
<div style="width: 300px;" class="wp-video"><video class="wp-video-shortcode" id="video-4596-3" width="300" height="173" poster="https://wordpress.org/news/files/2016/12/4.7-—-Header-Video.jpg" loop="1" autoplay="1" preload="metadata" controls="controls"><source type="video/mp4" src="https://wordpress.org/news/files/2016/12/video-headers.mp4?_=3" /><a href="https://wordpress.org/news/files/2016/12/video-headers.mp4">https://wordpress.org/news/files/2016/12/video-headers.mp4</a></video></div>
<p>Sometimes a big atmospheric video as a moving header image is just what you need to showcase your wares; go ahead and try it out with Twenty Seventeen. Need some video inspiration? Try searching for sites with video headers available for download and use.</p>
</div>
<div style="clear: both"></div>
<div style="float: left;width: 48%;margin: 0">
<h3>Smoother Menu Building</h3>
<p><img class="wp-image-4606 size-medium alignright" src="https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-Nav.jpg?resize=300%2C158&#038;ssl=1" srcset="https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-Nav.jpg?resize=300%2C158&amp;ssl=1 300w, https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-Nav.jpg?w=760&amp;ssl=1 760w" sizes="(max-width: 300px) 100vw, 300px" data-recalc-dims="1" /></p>
<p>Many menus for sites contain links to the pages of your site, but what happens when you don’t have any pages yet? Now you can add new pages while building menus instead of leaving the customizer and abandoning your changes. Once you’ve published your customizations, you’ll have new pages ready for you to fill with content.</p>
</div>
<div style="float: right;width: 48%;margin: 0">
<h3>Custom CSS</h3>
<p><img class="wp-image-4607 size-medium alignright" src="https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-CSS.jpg?resize=300%2C158&#038;ssl=1" srcset="https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-CSS.jpg?resize=300%2C158&amp;ssl=1 300w, https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-CSS.jpg?w=760&amp;ssl=1 760w" sizes="(max-width: 300px) 100vw, 300px" data-recalc-dims="1" /></p>
<p>Sometimes you just need a few visual tweaks to make your site perfect. WordPress 4.7 allows you to add custom CSS and instantly see how your changes affect your site. The live preview allows you to work quickly without page refreshes slowing you down.</p>
</div>
<div style="clear: both"></div>
<hr />
<div style="float: left;width: 48%;margin: 0">
<h3>PDF Thumbnail Previews</h3>
<p><img class="wp-image-4609 size-medium alignright" src="https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-PDF.jpg?resize=300%2C158&#038;ssl=1" srcset="https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-PDF.jpg?resize=300%2C158&amp;ssl=1 300w, https://i1.wp.com/wordpress.org/news/files/2016/12/4.7-—-PDF.jpg?w=760&amp;ssl=1 760w" sizes="(max-width: 300px) 100vw, 300px" data-recalc-dims="1" /></p>
<p>Managing your document collection is easier with WordPress 4.7. Uploading PDFs will generate thumbnail images so you can more easily distinguish between all your documents.</p>
</div>
<div style="float: right;width: 48%;margin: 0">
<h3>Dashboard in your language</h3>
<p><img class="wp-image-4608 size-medium alignright" src="https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Language.jpg?resize=300%2C158&#038;ssl=1" srcset="https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Language.jpg?resize=300%2C158&amp;ssl=1 300w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-Language.jpg?w=760&amp;ssl=1 760w" sizes="(max-width: 300px) 100vw, 300px" data-recalc-dims="1" /></p>
<p>Just because your site is in one language doesn’t mean that everybody helping manage it prefers that language for their admin. Add more languages to your site and a user language option will show up in your user’s profiles.</p>
</div>
<div style="clear: both"></div>
<hr />
<h2 style="text-align:center">Introducing REST API Content Endpoints</h2>
<p>WordPress 4.7 comes with REST API endpoints for posts, comments, terms, users, meta, and settings.</p>
<p><img class="size-large wp-image-4600 alignnone" src="https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-API.jpg?resize=632%2C205&#038;ssl=1" alt="" srcset="https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-API.jpg?resize=1024%2C332&amp;ssl=1 1024w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-API.jpg?resize=300%2C97&amp;ssl=1 300w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-API.jpg?resize=768%2C249&amp;ssl=1 768w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-API.jpg?w=1264&amp;ssl=1 1264w, https://i2.wp.com/wordpress.org/news/files/2016/12/4.7-—-API.jpg?w=1896&amp;ssl=1 1896w" sizes="(max-width: 632px) 100vw, 632px" data-recalc-dims="1" /></p>
<p>Content endpoints provide machine-readable external access to your WordPress site with a clear, standards-driven interface, paving the way for new and innovative methods of interacting with sites through plugins, themes, apps, and beyond. Ready to get started with development? <a href="https://developer.wordpress.org/rest-api/reference/">Check out the REST API reference.</a></p>
<hr />
<h2 style="text-align:center">Even More Developer Happiness <img src="https://s.w.org/images/core/emoji/2.2.1/72x72/1f60a.png" alt="?" class="wp-smiley" style="height: 1em; max-height: 1em;" /></h2>
<h3><a href="https://make.wordpress.org/core/2016/11/03/post-type-templates-in-4-7/">Post Type Templates</a></h3>
<p>By opening up the page template functionality to all post types, theme developers have even more flexibility with the WordPress template hierarchy.</p>
<h3>More Theme API Goodies</h3>
<p>WordPress 4.7 includes <a href="https://make.wordpress.org/core/2016/09/09/new-functions-hooks-and-behaviour-for-theme-developers-in-wordpress-4-7/">new functions, hooks, and behavior</a> for theme developers.</p>
<h3><a href="https://make.wordpress.org/core/2016/10/04/custom-bulk-actions/">Custom Bulk Actions</a></h3>
<p>List tables, now with more than bulk edit and delete.</p>
<h3><a href="https://make.wordpress.org/core/2016/09/08/wp_hook-next-generation-actions-and-filters/"><code>WP_Hook</code></a></h3>
<p>The code that lies beneath actions and filters has been overhauled and modernized, fixing bugs along the way.</p>
<h3>Settings Registration API</h3>
<p>register_setting() <a href="https://make.wordpress.org/core/2016/10/26/registering-your-settings-in-wordpress-4-7/">has been enhanced</a> to include type, description, and REST API visibility.</p>
<h3><a href="https://make.wordpress.org/core/2016/10/12/customize-changesets-technical-design-decisions/">Customize Changesets</a></h3>
<p>Customize changesets make changes in the customizer persistent, like autosave drafts. They also make exciting new features like starter content possible.</p>
<hr />
<h2 style="text-align:center">The Squad</h2>
<p>This release was led by <a href="https://helen.blog">Helen Hou-Sandí</a>, backed up by <a href="https://profiles.wordpress.org/jbpaul17">Jeff Paul</a> and <a href="http://aaron.jorb.in/">Aaron Jorbin</a> as Release Deputies, and with the help of these fine individuals. There are 482 contributors with props in this release—the most ever—with 205 of them contributing for the first time. Pull up some sassy Sarah Vaughan on your music service of choice, and check out some of their profiles:</p>
<a href="https://profiles.wordpress.org/aaroncampbell">Aaron D. Campbell</a>, <a href="https://profiles.wordpress.org/abrightclearweb">abrightclearweb</a>, <a href="https://profiles.wordpress.org/ibachal">Achal Jain</a>, <a href="https://profiles.wordpress.org/achbed">achbed</a>, <a href="https://profiles.wordpress.org/acmethemes">Acme Themes</a>, <a href="https://profiles.wordpress.org/adamsilverstein">Adam Silverstein</a>, <a href="https://profiles.wordpress.org/adammacias">adammacias</a>, <a href="https://profiles.wordpress.org/mrahmadawais">Ahmad Awais</a>, <a href="https://profiles.wordpress.org/ahmadawais">ahmadawais</a>, <a href="https://profiles.wordpress.org/airesvsg">airesvsg</a>, <a href="https://profiles.wordpress.org/ajoah">ajoah</a>, <a href="https://profiles.wordpress.org/akibjorklund">Aki Bj&#246;rklund</a>, <a href="https://profiles.wordpress.org/akshayvinchurkar">AkshayVinchurkar</a>, <a href="https://profiles.wordpress.org/xknown">Alex Concha</a>, <a href="https://profiles.wordpress.org/xavortm">Alex Dimitrov</a>, <a href="https://profiles.wordpress.org/ironpaperweight">Alex Hon</a>, <a href="https://profiles.wordpress.org/alex27">alex27</a>, <a href="https://profiles.wordpress.org/allancole">allancole</a>, <a href="https://profiles.wordpress.org/arush">Amanda Rush</a>, <a href="https://profiles.wordpress.org/afercia">Andrea Fercia</a>, <a href="https://profiles.wordpress.org/andrewp-2">Andreas Panag</a>, <a href="https://profiles.wordpress.org/nacin">Andrew Nacin</a>, <a href="https://profiles.wordpress.org/azaozz">Andrew Ozz</a>, <a href="https://profiles.wordpress.org/rarst">Andrey "Rarst" Savchenko</a>, <a href="https://profiles.wordpress.org/andizer">Andy Meerwaldt</a>, <a href="https://profiles.wordpress.org/kelderic">Andy Mercer</a>, <a href="https://profiles.wordpress.org/andy">Andy Skelton</a>, <a href="https://profiles.wordpress.org/aniketpant">Aniket Pant</a>, <a href="https://profiles.wordpress.org/anilbasnet">Anil Basnet</a>, <a href="https://profiles.wordpress.org/ankit-k-gupta">Ankit K Gupta</a>, <a href="https://profiles.wordpress.org/ahortin">Anthony Hortin</a>, <a href="https://profiles.wordpress.org/antisilent">antisilent</a>, <a href="https://profiles.wordpress.org/atimmer">Anton Timmermans</a>, <a href="https://profiles.wordpress.org/zuige">Antti Kuosmanen</a>, <a href="https://profiles.wordpress.org/apokalyptik">apokalyptik</a>, <a href="https://profiles.wordpress.org/artoliukkonen">artoliukkonen</a>, <a href="https://profiles.wordpress.org/ideag">Arunas Liuiza</a>, <a href="https://profiles.wordpress.org/attitude">attitude</a>, <a href="https://profiles.wordpress.org/backermann">backermann</a>, <a href="https://profiles.wordpress.org/b-07">Bappi</a>, <a href="https://profiles.wordpress.org/bcole808">Ben Cole</a>, <a href="https://profiles.wordpress.org/kau-boy">Bernhard Kau</a>, <a href="https://profiles.wordpress.org/binarymoon">BinaryMoon</a>, <a href="https://profiles.wordpress.org/birgire">Birgir Erlendsson (birgire)</a>, <a href="https://profiles.wordpress.org/bjornw">BjornW</a>, <a href="https://profiles.wordpress.org/bobbingwide">bobbingwide</a>, <a href="https://profiles.wordpress.org/boblinthorst">boblinthorst</a>, <a href="https://profiles.wordpress.org/boboudreau">boboudreau</a>, <a href="https://profiles.wordpress.org/gitlost">bonger</a>, <a href="https://profiles.wordpress.org/boonebgorges">Boone B. Gorges</a>, <a href="https://profiles.wordpress.org/bradyvercher">Brady Vercher</a>, <a href="https://profiles.wordpress.org/brainstormforce">Brainstorm Force</a>, <a href="https://profiles.wordpress.org/kraftbj">Brandon Kraft</a>, <a href="https://profiles.wordpress.org/brianhogg">Brian Hogg</a>, <a href="https://profiles.wordpress.org/krogsgard">Brian Krogsgard</a>, <a href="https://profiles.wordpress.org/bronsonquick">Bronson Quick</a>, <a href="https://profiles.wordpress.org/sixhours">Caroline Moore</a>, <a href="https://profiles.wordpress.org/caseypatrickdriscoll">Casey Driscoll</a>, <a href="https://profiles.wordpress.org/caspie">Caspie</a>, <a href="https://profiles.wordpress.org/chaos-engine">Chaos Engine</a>, <a href="https://profiles.wordpress.org/cheeserolls">cheeserolls</a>, <a href="https://profiles.wordpress.org/chesio">chesio</a>, <a href="https://profiles.wordpress.org/ketuchetan">chetansatasiya</a>, <a href="https://profiles.wordpress.org/choongsavvii">choong</a>, <a href="https://profiles.wordpress.org/chouby">Chouby</a>, <a href="https://profiles.wordpress.org/chredd">chredd</a>, <a href="https://profiles.wordpress.org/chrisjean">Chris Jean</a>, <a href="https://profiles.wordpress.org/cmmarslender">Chris Marslender</a>, <a href="https://profiles.wordpress.org/chris_d2d">Chris Smith</a>, <a href="https://profiles.wordpress.org/chrisvanpatten">Chris Van Patten</a>, <a href="https://profiles.wordpress.org/chriswiegman">Chris Wiegman</a>, <a href="https://profiles.wordpress.org/chriscct7">chriscct7</a>, <a href="https://profiles.wordpress.org/chriseverson">chriseverson</a>, <a href="https://profiles.wordpress.org/cwpnolen">Christian Nolen</a>, <a href="https://profiles.wordpress.org/needle">Christian Wach</a>, <a href="https://profiles.wordpress.org/christophherr">Christoph Herr</a>, <a href="https://profiles.wordpress.org/clarionwpdeveloper">Clarion Technologies</a>, <a href="https://profiles.wordpress.org/claudiosmweb">Claudio Sanches</a>, <a href="https://profiles.wordpress.org/claudiosanches">Claudio Sanches</a>, <a href="https://profiles.wordpress.org/claudiolabarbera">ClaudioLaBarbera</a>, <a href="https://profiles.wordpress.org/codemovementpk">codemovement.pk</a>, <a href="https://profiles.wordpress.org/coderkevin">coderkevin</a>, <a href="https://profiles.wordpress.org/codfish">codfish</a>, <a href="https://profiles.wordpress.org/coreymcollins">coreymcollins</a>, <a href="https://profiles.wordpress.org/curdin">Curdin Krummenacher</a>, <a href="https://profiles.wordpress.org/cgrymala">Curtiss Grymala</a>, <a href="https://profiles.wordpress.org/cdog">Cătălin Dogaru</a>, <a href="https://profiles.wordpress.org/danhgilmore">danhgilmore</a>, <a href="https://profiles.wordpress.org/danielbachhuber">Daniel Bachhuber </a>, <a href="https://profiles.wordpress.org/danielkanchev">Daniel Kanchev</a>, <a href="https://profiles.wordpress.org/danielpietrasik">Daniel Pietrasik</a>, <a href="https://profiles.wordpress.org/mte90">Daniele Scasciafratte</a>, <a href="https://profiles.wordpress.org/dllh">Daryl L. L. Houston (dllh)</a>, <a href="https://profiles.wordpress.org/davepullig">Dave Pullig</a>, <a href="https://profiles.wordpress.org/goto10">Dave Romsey (goto10)</a>, <a href="https://profiles.wordpress.org/davidakennedy">David A. Kennedy</a>, <a href="https://profiles.wordpress.org/turtlepod">David Chandra Purnama</a>, <a href="https://profiles.wordpress.org/dlh">David Herrera</a>, <a href="https://profiles.wordpress.org/dglingren">David Lingren</a>, <a href="https://profiles.wordpress.org/davidmosterd">David Mosterd</a>, <a href="https://profiles.wordpress.org/dshanske">David Shanske</a>, <a href="https://profiles.wordpress.org/davidbhayes">davidbhayes</a>, <a href="https://profiles.wordpress.org/folletto">Davide \'Folletto\' Casali</a>, <a href="https://profiles.wordpress.org/deeptiboddapati">deeptiboddapati</a>, <a href="https://profiles.wordpress.org/delphinus">delphinus</a>, <a href="https://profiles.wordpress.org/deltafactory">deltafactory</a>, <a href="https://profiles.wordpress.org/denis-de-bernardy">Denis de Bernardy</a>, <a href="https://profiles.wordpress.org/valendesigns">Derek Herman</a>, <a href="https://profiles.wordpress.org/pcfreak30">Derrick Hammer</a>, <a href="https://profiles.wordpress.org/derrickkoo">Derrick Koo</a>, <a href="https://profiles.wordpress.org/dimchik">dimchik</a>, <a href="https://profiles.wordpress.org/dineshc">Dinesh Chouhan</a>, <a href="https://profiles.wordpress.org/dd32">Dion Hulse</a>, <a href="https://profiles.wordpress.org/dipeshkakadiya">dipeshkakadiya</a>, <a href="https://profiles.wordpress.org/dmsnell">dmsnell</a>, <a href="https://profiles.wordpress.org/ocean90">Dominik Schilling</a>, <a href="https://profiles.wordpress.org/dotancohen">Dotan Cohen</a>, <a href="https://profiles.wordpress.org/dougwollison">Doug Wollison</a>, <a href="https://profiles.wordpress.org/doughamlin">doughamlin</a>, <a href="https://profiles.wordpress.org/drewapicture">Drew Jaynes</a>, <a href="https://profiles.wordpress.org/duncanjbrown">duncanjbrown</a>, <a href="https://profiles.wordpress.org/dungengronovius">dungengronovius</a>, <a href="https://profiles.wordpress.org/dylanauty">DylanAuty</a>, <a href="https://profiles.wordpress.org/hurtige">Eddie Hurtig</a>, <a href="https://profiles.wordpress.org/oso96_2000">Eduardo Reveles</a>, <a href="https://profiles.wordpress.org/chopinbach">Edwin Cromley</a>, <a href="https://profiles.wordpress.org/electricfeet">ElectricFeet</a>, <a href="https://profiles.wordpress.org/eliorivero">Elio Rivero</a>, <a href="https://profiles.wordpress.org/iseulde">Ella Iseulde Van Dorpe</a>, <a href="https://profiles.wordpress.org/elyobo">elyobo</a>, <a href="https://profiles.wordpress.org/enodekciw">enodekciw</a>, <a href="https://profiles.wordpress.org/enshrined">enshrined</a>, <a href="https://profiles.wordpress.org/ericlewis">Eric Andrew Lewis</a>, <a href="https://profiles.wordpress.org/pushred">Eric Lanehart</a>, <a href="https://profiles.wordpress.org/eherman24">Evan Herman</a>, <a href="https://profiles.wordpress.org/flixos90">Felix Arntz</a>, <a href="https://profiles.wordpress.org/fencer04">Fencer04</a>, <a href="https://profiles.wordpress.org/florianbrinkmann">Florian Brinkmann</a>, <a href="https://profiles.wordpress.org/mista-flo">Florian TIAR</a>, <a href="https://profiles.wordpress.org/foliovision">FolioVision</a>, <a href="https://profiles.wordpress.org/fomenkoandrey">fomenkoandrey</a>, <a href="https://profiles.wordpress.org/frank-klein">Frank Klein</a>, <a href="https://profiles.wordpress.org/fjarrett">Frankie Jarrett</a>, <a href="https://profiles.wordpress.org/frankiet">frankiet</a>, <a href="https://profiles.wordpress.org/akeif">Fred</a>, <a href="https://profiles.wordpress.org/frozzare">Fredrik Forsmo</a>, <a href="https://profiles.wordpress.org/fuscata">fuscata</a>, <a href="https://profiles.wordpress.org/gma992">Gabriel Maldonado</a>, <a href="https://profiles.wordpress.org/garyj">Gary Jones</a>, <a href="https://profiles.wordpress.org/pento">Gary Pendergast</a>, <a href="https://profiles.wordpress.org/geekysoft">Geeky Software</a>, <a href="https://profiles.wordpress.org/georgestephanis">George Stephanis</a>, <a href="https://profiles.wordpress.org/goranseric">Goran &#352;erić</a>, <a href="https://profiles.wordpress.org/grahamarmfield">Graham Armfield</a>, <a href="https://profiles.wordpress.org/grantderepas">Grant Derepas</a>, <a href="https://profiles.wordpress.org/tivnet">Gregory Karpinsky (@tivnet)</a>, <a href="https://profiles.wordpress.org/hardeepasrani">Hardeep Asrani</a>, <a href="https://profiles.wordpress.org/henrywright">Henry Wright</a>, <a href="https://profiles.wordpress.org/hiddenpearls">hiddenpearls</a>, <a href="https://profiles.wordpress.org/hnle">Hinaloe</a>, <a href="https://profiles.wordpress.org/hugobaeta">Hugo Baeta</a>, <a href="https://profiles.wordpress.org/polevaultweb">Iain Poulson</a>, <a href="https://profiles.wordpress.org/iamjolly">iamjolly</a>, <a href="https://profiles.wordpress.org/iandunn">Ian Dunn</a>, <a href="https://profiles.wordpress.org/ianedington">ian.edington</a>, <a href="https://profiles.wordpress.org/idealien">idealien</a>, <a href="https://profiles.wordpress.org/igmoweb">Ignacio Cruz Moreno</a>, <a href="https://profiles.wordpress.org/imath">imath</a>, <a href="https://profiles.wordpress.org/imnok">Imnok</a>, <a href="https://profiles.wordpress.org/implenton">implenton</a>, <a href="https://profiles.wordpress.org/ionutst">Ionut Stanciu</a>, <a href="https://profiles.wordpress.org/ipstenu">Ipstenu (Mika Epstein)</a>, <a href="https://profiles.wordpress.org/krstarica">Ivan</a>, <a href="https://profiles.wordpress.org/ivdimova">ivdimova</a>, <a href="https://profiles.wordpress.org/jdgrimes">J.D. Grimes</a>, <a href="https://profiles.wordpress.org/jakept">Jacob Peattie</a>, <a href="https://profiles.wordpress.org/whyisjake">Jake Spurlock</a>, <a href="https://profiles.wordpress.org/jnylen0">James Nylen</a>, <a href="https://profiles.wordpress.org/jamesacero">jamesacero</a>, <a href="https://profiles.wordpress.org/japh">Japh</a>, <a href="https://profiles.wordpress.org/jaredcobb">Jared Cobb</a>, <a href="https://profiles.wordpress.org/jayarjo">jayarjo</a>, <a href="https://profiles.wordpress.org/jdolan">jdolan</a>, <a href="https://profiles.wordpress.org/jdoubleu">jdoubleu</a>, <a href="https://profiles.wordpress.org/cheffheid">Jeffrey de Wit</a>, <a href="https://profiles.wordpress.org/jeremyfelt">Jeremy Felt</a>, <a href="https://profiles.wordpress.org/jpry">Jeremy Pry</a>, <a href="https://profiles.wordpress.org/jimt">jimt</a>, <a href="https://profiles.wordpress.org/jipmoors">Jip Moors</a>, <a href="https://profiles.wordpress.org/jmusal">jmusal</a>, <a href="https://profiles.wordpress.org/joedolson">Joe Dolson</a>, <a href="https://profiles.wordpress.org/joehoyle">Joe Hoyle</a>, <a href="https://profiles.wordpress.org/joemcgill">Joe McGill</a>, <a href="https://profiles.wordpress.org/joelcj91">Joel James</a>, <a href="https://profiles.wordpress.org/johanmynhardt">johanmynhardt</a>, <a href="https://profiles.wordpress.org/johnbillion">John Blackbourn</a>, <a href="https://profiles.wordpress.org/zyphonic">John Dittmar</a>, <a href="https://profiles.wordpress.org/johnjamesjacoby">John James Jacoby</a>, <a href="https://profiles.wordpress.org/johnpbloch">John P. Bloch</a>, <a href="https://profiles.wordpress.org/johnregan3">John Regan</a>, <a href="https://profiles.wordpress.org/johnpgreen">johnpgreen</a>, <a href="https://profiles.wordpress.org/kenshino">Jon (Kenshino)</a>, <a href="https://profiles.wordpress.org/jonathanbardo">Jonathan Bardo</a>, <a href="https://profiles.wordpress.org/jbrinley">Jonathan Brinley</a>, <a href="https://profiles.wordpress.org/daggerhart">Jonathan Daggerhart</a>, <a href="https://profiles.wordpress.org/desrosj">Jonathan Desrosiers</a>, <a href="https://profiles.wordpress.org/spacedmonkey">Jonny Harris</a>, <a href="https://profiles.wordpress.org/jonnyauk">jonnyauk</a>, <a href="https://profiles.wordpress.org/jordesign">jordesign</a>, <a href="https://profiles.wordpress.org/jorritschippers">JorritSchippers</a>, <a href="https://profiles.wordpress.org/joefusco">Joseph Fusco</a>, <a href="https://profiles.wordpress.org/jjeaton">Josh Eaton</a>, <a href="https://profiles.wordpress.org/shelob9">Josh Pollock</a>, <a href="https://profiles.wordpress.org/joshcummingsdesign">joshcummingsdesign</a>, <a href="https://profiles.wordpress.org/joshkadis">joshkadis</a>, <a href="https://profiles.wordpress.org/joyously">Joy</a>, <a href="https://profiles.wordpress.org/jrf">jrf</a>, <a href="https://profiles.wordpress.org/jrgould">JRGould</a>, <a href="https://profiles.wordpress.org/juanfra">Juanfra Aldasoro</a>, <a href="https://profiles.wordpress.org/juhise">Juhi Saxena</a>, <a href="https://profiles.wordpress.org/nukaga">Junko Nukaga</a>, <a href="https://profiles.wordpress.org/justinbusa">Justin Busa</a>, <a href="https://profiles.wordpress.org/justinsainton">Justin Sainton</a>, <a href="https://profiles.wordpress.org/jshreve">Justin Shreve</a>, <a href="https://profiles.wordpress.org/jtsternberg">Justin Sternberg</a>, <a href="https://profiles.wordpress.org/kadamwhite">K.Adam White</a>, <a href="https://profiles.wordpress.org/kacperszurek">kacperszurek</a>, <a href="https://profiles.wordpress.org/trepmal">Kailey (trepmal)</a>, <a href="https://profiles.wordpress.org/kalenjohnson">KalenJohnson</a>, <a href="https://profiles.wordpress.org/codebykat">Kat Hagan</a>, <a href="https://profiles.wordpress.org/kkoppenhaver">Keanan Koppenhaver</a>, <a href="https://profiles.wordpress.org/keesiemeijer">keesiemeijer</a>, <a href="https://profiles.wordpress.org/kellbot">kellbot</a>, <a href="https://profiles.wordpress.org/ryelle">Kelly Dwan</a>, <a href="https://profiles.wordpress.org/wraithkenny">Ken Newman</a>, <a href="https://profiles.wordpress.org/khag7">Kevin Hagerty</a>, <a href="https://profiles.wordpress.org/kwight">Kirk Wight</a>, <a href="https://profiles.wordpress.org/kitchin">kitchin</a>, <a href="https://profiles.wordpress.org/ixkaito">Kite</a>, <a href="https://profiles.wordpress.org/kjbenk">kjbenk</a>, <a href="https://profiles.wordpress.org/knutsp">Knut Sparhell</a>, <a href="https://profiles.wordpress.org/koenschipper">koenschipper</a>, <a href="https://profiles.wordpress.org/kokarn">kokarn</a>, <a href="https://profiles.wordpress.org/kovshenin">Konstantin Kovshenin</a>, <a href="https://profiles.wordpress.org/obenland">Konstantin Obenland</a>, <a href="https://profiles.wordpress.org/kouratoras">Konstantinos Kouratoras</a>, <a href="https://profiles.wordpress.org/kuchenundkakao">kuchenundkakao</a>, <a href="https://profiles.wordpress.org/kuldipem">kuldipem</a>, <a href="https://profiles.wordpress.org/laurelfulford">Laurel Fulford</a>, <a href="https://profiles.wordpress.org/leewillis77">Lee Willis</a>, <a href="https://profiles.wordpress.org/leobaiano">Leo Baiano</a>, <a href="https://profiles.wordpress.org/littlebigthing">LittleBigThings (Csaba)</a>, <a href="https://profiles.wordpress.org/lucasstark">Lucas Stark</a>, <a href="https://profiles.wordpress.org/lukecavanagh">Luke Cavanagh</a>, <a href="https://profiles.wordpress.org/lgedeon">Luke Gedeon</a>, <a href="https://profiles.wordpress.org/lukepettway">lukepettway</a>, <a href="https://profiles.wordpress.org/lyubomir_popov">lyubomir_popov</a>, <a href="https://profiles.wordpress.org/mageshp">mageshp</a>, <a href="https://profiles.wordpress.org/mahesh901122">Mahesh Waghmare</a>, <a href="https://profiles.wordpress.org/mangeshp">Mangesh Parte</a>, <a href="https://profiles.wordpress.org/manishsongirkar36">Manish Songirkar</a>, <a href="https://profiles.wordpress.org/mantismamita">mantismamita</a>, <a href="https://profiles.wordpress.org/mbootsman">Marcel Bootsman</a>, <a href="https://profiles.wordpress.org/tyxla">Marin Atanasov</a>, <a href="https://profiles.wordpress.org/mariovalney">Mario Valney</a>, <a href="https://profiles.wordpress.org/clorith">Marius L. J. (Clorith)</a>, <a href="https://profiles.wordpress.org/markjaquith">Mark Jaquith</a>, <a href="https://profiles.wordpress.org/mrwweb">Mark Root-Wiley</a>, <a href="https://profiles.wordpress.org/mapk">Mark Uraine</a>, <a href="https://profiles.wordpress.org/markoheijnen">Marko Heijnen</a>, <a href="https://profiles.wordpress.org/markshep">markshep</a>, <a href="https://profiles.wordpress.org/matrixik">matrixik</a>, <a href="https://profiles.wordpress.org/mjbanks">Matt Banks</a>, <a href="https://profiles.wordpress.org/jaworskimatt">Matt Jaworski</a>, <a href="https://profiles.wordpress.org/mattking5000">Matt King</a>, <a href="https://profiles.wordpress.org/matt">Matt Mullenweg</a>, <a href="https://profiles.wordpress.org/veraxus">Matt van Andel</a>, <a href="https://profiles.wordpress.org/mattwiebe">Matt Wiebe</a>, <a href="https://profiles.wordpress.org/mattheu">Matthew Haines-Young</a>, <a href="https://profiles.wordpress.org/mattyrob">mattyrob</a>, <a href="https://profiles.wordpress.org/maxcutler">Max Cutler</a>, <a href="https://profiles.wordpress.org/maximeculea">Maxime Culea</a>, <a href="https://profiles.wordpress.org/mayukojpn">Mayo Moriyama</a>, <a href="https://profiles.wordpress.org/mbelchev">mbelchev</a>, <a href="https://profiles.wordpress.org/mckernanin">mckernanin</a>, <a href="https://profiles.wordpress.org/melchoyce">Mel Choyce</a>, <a href="https://profiles.wordpress.org/mhowell">mhowell</a>, <a href="https://profiles.wordpress.org/michaelarestad">Michael Arestad</a>, <a href="https://profiles.wordpress.org/michael-arestad">Michael Arestad</a>, <a href="https://profiles.wordpress.org/michalzuber">michalzuber</a>, <a href="https://profiles.wordpress.org/mauteri">Mike Auteri</a>, <a href="https://profiles.wordpress.org/mihai2u">Mike Crantea</a>, <a href="https://profiles.wordpress.org/mdgl">Mike Glendinning</a>, <a href="https://profiles.wordpress.org/mikehansenme">Mike Hansen</a>, <a href="https://profiles.wordpress.org/mikelittle">Mike Little</a>, <a href="https://profiles.wordpress.org/mikeschroder">Mike Schroder</a>, <a href="https://profiles.wordpress.org/mikeviele">Mike Viele</a>, <a href="https://profiles.wordpress.org/dimadin">Milan Dinić</a>, <a href="https://profiles.wordpress.org/modemlooper">modemlooper</a>, <a href="https://profiles.wordpress.org/batmoo">Mohammad Jangda</a>, <a href="https://profiles.wordpress.org/deremohan">Mohan Dere</a>, <a href="https://profiles.wordpress.org/monikarao">monikarao</a>, <a href="https://profiles.wordpress.org/morettigeorgiev">morettigeorgiev</a>, <a href="https://profiles.wordpress.org/morganestes">Morgan Estes</a>, <a href="https://profiles.wordpress.org/mor10">Morten Rand-Hendriksen</a>, <a href="https://profiles.wordpress.org/mt8biz">moto hachi ( mt8.biz )</a>, <a href="https://profiles.wordpress.org/mrbobbybryant">mrbobbybryant</a>, <a href="https://profiles.wordpress.org/nnaimov">Naim Naimov</a>, <a href="https://profiles.wordpress.org/natewr">NateWr</a>, <a href="https://profiles.wordpress.org/nathanrice">nathanrice</a>, <a href="https://profiles.wordpress.org/nazgul">Nazgul</a>, <a href="https://profiles.wordpress.org/greatislander">Ned Zimmerman</a>, <a href="https://profiles.wordpress.org/celloexpressions">Nick Halsey </a>, <a href="https://profiles.wordpress.org/nikeo">Nicolas GUILLAUME</a>, <a href="https://profiles.wordpress.org/nikschavan">Nikhil Chavan</a>, <a href="https://profiles.wordpress.org/nikv">Nikhil Vimal</a>, <a href="https://profiles.wordpress.org/nbachiyski">Nikolay Bachiyski</a>, <a href="https://profiles.wordpress.org/rabmalin">Nilambar Sharma</a>, <a href="https://profiles.wordpress.org/noplanman">noplanman</a>, <a href="https://profiles.wordpress.org/nullvariable">nullvariable</a>, <a href="https://profiles.wordpress.org/odie2">odie2</a>, <a href="https://profiles.wordpress.org/odysseygate">odyssey</a>, <a href="https://profiles.wordpress.org/hideokamoto">Okamoto Hidetaka</a>, <a href="https://profiles.wordpress.org/orvils">orvils</a>, <a href="https://profiles.wordpress.org/oskosk">oskosk</a>, <a href="https://profiles.wordpress.org/ottok">Otto Kek&#228;l&#228;inen</a>, <a href="https://profiles.wordpress.org/ovann86">ovann86</a>, <a href="https://profiles.wordpress.org/swissspidy">Pascal Birchler</a>, <a href="https://profiles.wordpress.org/patilvikasj">patilvikasj</a>, <a href="https://profiles.wordpress.org/pbearne">Paul Bearne</a>, <a href="https://profiles.wordpress.org/paulwilde">Paul Wilde</a>, <a href="https://profiles.wordpress.org/sirbrillig">Payton Swick</a>, <a href="https://profiles.wordpress.org/pdufour">pdufour</a>, <a href="https://profiles.wordpress.org/piewp">Perdaan</a>, <a href="https://profiles.wordpress.org/peterwilsoncc">Peter Wilson</a>, <a href="https://profiles.wordpress.org/phh">phh</a>, <a href="https://profiles.wordpress.org/php">php</a>, <a href="https://profiles.wordpress.org/delawski">Piotr Delawski</a>, <a href="https://profiles.wordpress.org/pippinsplugins">pippinsplugins</a>, <a href="https://profiles.wordpress.org/pjgalbraith">pjgalbraith</a>, <a href="https://profiles.wordpress.org/pkevan">pkevan</a>, <a href="https://profiles.wordpress.org/pratikchaskar">Pratik</a>, <a href="https://profiles.wordpress.org/pressionate">Pressionate</a>, <a href="https://profiles.wordpress.org/presskopp">Presskopp</a>, <a href="https://profiles.wordpress.org/procodewp">procodewp</a>, <a href="https://profiles.wordpress.org/quasel">quasel</a>, <a href="https://profiles.wordpress.org/rachelbaker">Rachel Baker</a>, <a href="https://profiles.wordpress.org/rahulsprajapati">Rahul Prajapati</a>, <a href="https://profiles.wordpress.org/superpoincare">Ramanan</a>, <a href="https://profiles.wordpress.org/ramiy">Rami Yushuvaev</a>, <a href="https://profiles.wordpress.org/ramiabraham">ramiabraham</a>, <a href="https://profiles.wordpress.org/ranh">ranh</a>, <a href="https://profiles.wordpress.org/redsand">Red Sand Media Group</a>, <a href="https://profiles.wordpress.org/youknowriad">Riad Benguella</a>, <a href="https://profiles.wordpress.org/rianrietveld">Rian Rietveld</a>, <a href="https://profiles.wordpress.org/iamfriendly">Richard Tape</a>, <a href="https://profiles.wordpress.org/rpayne7264">Robert D Payne</a>, <a href="https://profiles.wordpress.org/rnoakes3rd">Robert Noakes</a>, <a href="https://profiles.wordpress.org/d4z_c0nf">Rocco Aliberti</a>, <a href="https://profiles.wordpress.org/rodrigosprimo">Rodrigo Primo</a>, <a href="https://profiles.wordpress.org/rommelxcastro">Rommel Castro</a>, <a href="https://profiles.wordpress.org/fronaldaraujo">Ronald Ara&#250;jo</a>, <a href="https://profiles.wordpress.org/magicroundabout">Ross Wintle</a>, <a href="https://profiles.wordpress.org/guavaworks">Roy Sivan</a>, <a href="https://profiles.wordpress.org/ryankienstra">Ryan Kienstra</a>, <a href="https://profiles.wordpress.org/rmccue">Ryan McCue</a>, <a href="https://profiles.wordpress.org/ryanplas">Ryan Plas</a>, <a href="https://profiles.wordpress.org/welcher">Ryan Welcher</a>, <a href="https://profiles.wordpress.org/salcode">Sal Ferrarello</a>, <a href="https://profiles.wordpress.org/samikeijonen">Sami Keijonen</a>, <a href="https://profiles.wordpress.org/solarissmoke">Samir Shah</a>, <a href="https://profiles.wordpress.org/samuelsidler">Samuel Sidler</a>, <a href="https://profiles.wordpress.org/sandesh055">Sandesh</a>, <a href="https://profiles.wordpress.org/smyoon315">Sang-Min Yoon</a>, <a href="https://profiles.wordpress.org/pollyplummer">Sarah Gooding</a>, <a href="https://profiles.wordpress.org/sayedwp">Sayed Taqui</a>, <a href="https://profiles.wordpress.org/schlessera">schlessera</a>, <a href="https://profiles.wordpress.org/schrapel">schrapel</a>, <a href="https://profiles.wordpress.org/coffee2code">Scott Reilly</a>, <a href="https://profiles.wordpress.org/wonderboymusic">Scott Taylor</a>, <a href="https://profiles.wordpress.org/scrappyhuborg">scrappy@hub.org</a>, <a href="https://profiles.wordpress.org/scribu">scribu</a>, <a href="https://profiles.wordpress.org/seancjones">seancjones</a>, <a href="https://profiles.wordpress.org/sebastianpisula">Sebastian Pisula</a>, <a href="https://profiles.wordpress.org/sergeybiryukov">Sergey Biryukov</a>, <a href="https://profiles.wordpress.org/sgr33n">Sergio De Falco</a>, <a href="https://profiles.wordpress.org/shayanys">shayanys</a>, <a href="https://profiles.wordpress.org/shprink">shprink</a>, <a href="https://profiles.wordpress.org/simonlampen">simonlampen</a>, <a href="https://profiles.wordpress.org/skippy">skippy</a>, <a href="https://profiles.wordpress.org/smerriman">smerriman</a>, <a href="https://profiles.wordpress.org/snacking">snacking</a>, <a href="https://profiles.wordpress.org/soean">Soeren Wrede</a>, <a href="https://profiles.wordpress.org/solal">solal</a>, <a href="https://profiles.wordpress.org/sstoqnov">Stanimir Stoyanov</a>, <a href="https://profiles.wordpress.org/metodiew">Stanko Metodiev</a>, <a href="https://profiles.wordpress.org/sharkomatic">Steph</a>, <a href="https://profiles.wordpress.org/sswells">Steph Wells</a>, <a href="https://profiles.wordpress.org/sillybean">Stephanie Leary</a>, <a href="https://profiles.wordpress.org/netweb">Stephen Edgar</a>, <a href="https://profiles.wordpress.org/stephenharris">Stephen Harris</a>, <a href="https://profiles.wordpress.org/stevenkword">Steven Word</a>, <a href="https://profiles.wordpress.org/stevenlinx">stevenlinx</a>, <a href="https://profiles.wordpress.org/stubgo">stubgo</a>, <a href="https://profiles.wordpress.org/sudar">Sudar Muthu</a>, <a href="https://profiles.wordpress.org/patilswapnilv">Swapnil V. Patil</a>, <a href="https://profiles.wordpress.org/swapnild">swapnild</a>, <a href="https://profiles.wordpress.org/takahashi_fumiki">Takahashi Fumiki</a>, <a href="https://profiles.wordpress.org/miyauchi">Takayuki Miyauchi</a>, <a href="https://profiles.wordpress.org/karmatosed">Tammie Lister</a>, <a href="https://profiles.wordpress.org/tapsboy">tapsboy</a>, <a href="https://profiles.wordpress.org/tlovett1">Taylor Lovett</a>, <a href="https://profiles.wordpress.org/team">team</a>, <a href="https://profiles.wordpress.org/tg29359">tg29359</a>, <a href="https://profiles.wordpress.org/tharsheblows">tharsheblows</a>, <a href="https://profiles.wordpress.org/the">the</a>, <a href="https://profiles.wordpress.org/themeshaper">themeshaper</a>, <a href="https://profiles.wordpress.org/thenbrent">thenbrent</a>, <a href="https://profiles.wordpress.org/thomaswm">thomaswm</a>, <a href="https://profiles.wordpress.org/tfrommen">Thorsten Frommen</a>, <a href="https://profiles.wordpress.org/tierra">tierra</a>, <a href="https://profiles.wordpress.org/tnash">Tim Nash</a>, <a href="https://profiles.wordpress.org/timmydcrawford">Timmy Crawford</a>, <a href="https://profiles.wordpress.org/timothyblynjacobs">Timothy Jacobs</a>, <a href="https://profiles.wordpress.org/tkama">Tkama</a>, <a href="https://profiles.wordpress.org/tnegri">tnegri</a>, <a href="https://profiles.wordpress.org/tomauger">Tom Auger</a>, <a href="https://profiles.wordpress.org/tjnowell">Tom J Nowell</a>, <a href="https://profiles.wordpress.org/tomdxw">tomdxw</a>, <a href="https://profiles.wordpress.org/toro_unit">Toro_Unit (Hiroshi Urabe)</a>, <a href="https://profiles.wordpress.org/zodiac1978">Torsten Landsiedel</a>, <a href="https://profiles.wordpress.org/transl8or">transl8or</a>, <a href="https://profiles.wordpress.org/traversal">traversal</a>, <a href="https://profiles.wordpress.org/wpsmith">Travis Smith</a>, <a href="https://profiles.wordpress.org/nmt90">Triet Minh</a>, <a href="https://profiles.wordpress.org/trishasalas">Trisha Salas</a>, <a href="https://profiles.wordpress.org/tristangemus">tristangemus</a>, <a href="https://profiles.wordpress.org/truongwp">Truong Giang</a>, <a href="https://profiles.wordpress.org/tsl143">tsl143</a>, <a href="https://profiles.wordpress.org/tywayne">Ty Carlson</a>, <a href="https://profiles.wordpress.org/grapplerulrich">Ulrich</a>, <a href="https://profiles.wordpress.org/utkarshpatel">Utkarsh</a>, <a href="https://profiles.wordpress.org/valeriutihai">Valeriu Tihai</a>, <a href="https://profiles.wordpress.org/vishalkakadiya">Vishal Kakadiya</a>, <a href="https://profiles.wordpress.org/voldemortensen">voldemortensen</a>, <a href="https://profiles.wordpress.org/vrundakansara-1">Vrunda Kansara</a>, <a href="https://profiles.wordpress.org/webbgaraget">webbgaraget</a>, <a href="https://profiles.wordpress.org/webmandesign">WebMan Design &#124; Oliver Juhas</a>, <a href="https://profiles.wordpress.org/websupporter">websupporter</a>, <a href="https://profiles.wordpress.org/westonruter">Weston Ruter</a>, <a href="https://profiles.wordpress.org/earnjam">William Earnhardt</a>, <a href="https://profiles.wordpress.org/williampatton">williampatton</a>, <a href="https://profiles.wordpress.org/wolly">Wolly aka Paolo Valenti</a>, <a href="https://profiles.wordpress.org/yale01">yale01</a>, <a href="https://profiles.wordpress.org/yoavf">Yoav Farhi</a>, <a href="https://profiles.wordpress.org/yogasukma">Yoga Sukma</a>, <a href="https://profiles.wordpress.org/oxymoron">Zach Wills</a>, <a href="https://profiles.wordpress.org/tollmanz">Zack Tollman</a>, <a href="https://profiles.wordpress.org/vanillalounge">Ze Fontainhas</a>, <a href="https://profiles.wordpress.org/zhildzik">zhildzik</a>, and <a href="https://profiles.wordpress.org/zsusag">zsusag</a>.
<p>&nbsp;<br />
Special thanks go to <a href="https://ramiabraham.com/">Rami Abraham</a> for producing the release video and the many fine haiku we saw in the <a href="https://wordpress.org/news/2016/10/wordpress-4-7-beta-1/">beta</a> and <a href="https://wordpress.org/news/2016/11/wordpress-4-7-release-candidate/">RC</a> announcement posts.</p>
<p>Finally, thanks to all the community translators who worked on WordPress 4.7. Their efforts bring WordPress 4.7 fully translated to 52 languages at release time with more on the way. Additionally, the WordPress 4.7 release video has been captioned into 44 languages.</p>
<p>If you want to follow along or help out, check out <a href="https://make.wordpress.org/">Make WordPress</a> and our <a href="https://make.wordpress.org/core/">core development blog</a>. Thanks for choosing WordPress &#8211; we hope you enjoy!</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4596";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:33:"









";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:17:"Moving Toward SSL";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/news/2016/12/moving-toward-ssl/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 Dec 2016 17:20:29 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4588";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:327:"We’re at a turning point: 2017 is going to be the year that we’re going to see features in WordPress which require hosts to have HTTPS available. Just as JavaScript is a near necessity for smoother user experiences and more modern PHP versions are critical for performance, SSL just makes sense as the next hurdle [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:1627:"<p>We’re at a turning point: 2017 is going to be the year that we’re going to see features in WordPress which require hosts to have HTTPS available. Just as JavaScript is a near necessity for smoother user experiences and more modern PHP versions are critical for performance, SSL just makes sense as the next hurdle our users are going to face.</p>
<p>SSL basically means the link between your browser and the server is encrypted. SSL used to be difficult to implement, and often expensive or slow. Modern browsers, and the incredible success of projects like <a href="https://letsencrypt.org/">Let&#8217;s Encrypt</a> have made getting a certificate to secure your site fast, free, and something we think every host should support by default, especially in a post-Snowden era. Google also weighs <a href="https://security.googleblog.com/2014/08/https-as-ranking-signal_6.html">SSL as a search engine ranking factor</a> and will begin <a href="http://motherboard.vice.com/read/google-will-soon-shame-all-websites-that-are-unencrypted-chrome-https">flagging unencrypted sites in Chrome</a>.</p>
<p>First, early in 2017, we will only promote hosting partners that provide a SSL certificate by default in their accounts. Later we will begin to assess which features, such as API authentication, would benefit the most from SSL and make them only enabled when SSL is there.</p>
<p>Separately, I also think the performance improvements in PHP7 are particularly impressive, and major kudos to everyone who worked on that. We will consider whether hosts use PHP7 by default for new accounts next year as well.</p>
<p>&nbsp;</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4588";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:33:"









";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:31:"WordPress 4.7 Release Candidate";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:67:"https://wordpress.org/news/2016/11/wordpress-4-7-release-candidate/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Nov 2016 04:26:23 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4579";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:328:"The release candidate for WordPress 4.7 is now available. RC means we think we’re done, but with millions of users and thousands of plugins and themes, it’s possible we’ve missed something. We hope to ship WordPress 4.7 on Tuesday, December 6, but we need your help to get there. If you haven’t tested 4.7 yet, [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Helen Hou-Sandi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:4331:"<p>The release candidate for WordPress 4.7 is now available.</p>
<p>RC means we think we’re done, but with millions of users and thousands of plugins and themes, it’s possible we’ve missed something. We hope to ship WordPress 4.7 on <strong>Tuesday, December 6</strong>, but we need <em>your</em> help to get there. If you haven’t tested 4.7 yet, now is the time! To test WordPress 4.7, you can use the <a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin or you can <a href="https://wordpress.org/wordpress-4.7-RC1.zip">download the release candidate here</a> (zip).</p>
<p>WordPress 4.7 is a jam-packed release, with a number of features focused on getting a theme set up for the first time. Highlights include a <a href="http://2017.wordpress.net/">new default theme</a>, video headers, custom CSS, customizer edit shortcuts, PDF thumbnail previews, user admin languages, REST API content endpoints, post type templates, and more.</p>
<p>We’ve made <a href="https://core.trac.wordpress.org/log/trunk/src?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=39353&amp;stop_rev=39263&amp;limit=200&amp;verbose=on&amp;sfp_email=&amp;sfph_mail=">quite a few refinements</a> since releasing Beta 4 a week ago, including usability and accessibility enhancements for video headers, media and page template support in starter content, and polishing of how custom CSS can be migrated to and extended by plugins and themes. The REST API endpoints saw a number of bugfixes and notably now have anonymous comment off by default.</p>
<p>Not sure where to start with testing? Try setting up a fresh site on a new installation with Twenty Seventeen (hint: head into customizing your site before touching any pages or widgets) and taking notes on what you enjoyed and what got you stuck. For more details about what&#8217;s new in version 4.7, check out the <a href="https://wordpress.org/news/2016/10/wordpress-4-7-beta-1/">Beta 1</a>, <a href="https://wordpress.org/news/2016/11/wordpress-4-7-beta-2/">Beta 2</a>, <a href="https://wordpress.org/news/2016/11/wordpress-4-7-beta-3/">Beta 3</a>, and <a href="https://wordpress.org/news/2016/11/wordpress-4-7-beta-4/">Beta 4</a> blog posts.</p>
<p><strong>Think you’ve found a bug?</strong> Please post to the <a href="https://wordpress.org/support/forum/alphabeta/">Alpha/Beta support forum</a>. If any known issues come up, you’ll be able to <a href="https://core.trac.wordpress.org/report/5">find them here</a>.</p>
<p><strong>Developers</strong>, please test your plugins and themes against WordPress 4.7 and update your plugin’s <em>Tested up to</em> version in the readme to 4.7. If you find compatibility problems please be sure to post to the support forums so we can figure those out before the final release – we work hard to avoid breaking things. An in-depth field guide to developer-focused changes is coming soon on the <a href="https://make.wordpress.org/core/">core development blog</a>.</p>
<p>Do you speak a language other than English? <a href="https://translate.wordpress.org/projects/wp/dev">Help us translate WordPress into more than 100 languages!</a> And if you haven&#8217;t yet done so, now is a great time to <a href="https://wordpressdotorg.polldaddy.com/s/wordpress-2016-survey">take the Annual WordPress Survey</a> and send it on to your friends.</p>
<p>Happy testing! And now for another <a href="https://profiles.wordpress.org/ramiabraham">Rami Abraham</a> haiku break.</p>
<p><em>Select your language</em><br />
<em>Then let your users choose theirs</em><br />
<em><code>get_user_locale()</code></em></p>
<p><em>Theme authors rejoice</em><br />
<em>Any option may employ</em><br />
<em>Selective refresh</em></p>
<p><em>Custom header video</em><br />
<em>Make sure to <code>add_theme_support</code></em><br />
<em>Bling above the fold</em></p>
<p><em>A new template dawns</em><br />
<em>A hierarchy member</em><br />
<em>Post-type templates live</em></p>
<p><em>PDF updates</em><br />
<em>Pack a parade of polish</em><br />
<em>Prettier previews</em></p>
<p><em>Template Post Type: New</em><br />
<em>Template Post Type: And Useful</em><br />
<em>Template Post Type: Thing</em></p>
<p><em>Let lists live lively</em><br />
<em>Laud <code>wp_list_sort()</code></em><br />
<em>Less laconic lists</em></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4579";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:33:"









";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:20:"WordPress 4.7 Beta 4";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2016/11/wordpress-4-7-beta-4/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 16 Nov 2016 01:51:52 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4576";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:329:"WordPress 4.7 Beta 4 is now available! This software is still in development, so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.7, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Helen Hou-Sandi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:2019:"<p>WordPress 4.7 Beta 4 is now available!</p>
<p><strong>This software is still in development,</strong> so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.7, try the <a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href="https://wordpress.org/wordpress-4.7-beta4.zip">download the beta here</a> (zip).</p>
<p>For more information on what’s new in 4.7, check out the <a href="https://wordpress.org/news/2016/10/wordpress-4-7-beta-1/">Beta 1,</a> <a href="https://wordpress.org/news/2016/11/wordpress-4-7-beta-2/">Beta 2</a>, and <a href="https://wordpress.org/news/2016/11/wordpress-4-7-beta-3/">Beta 3</a> blog posts, along with <a href="https://make.wordpress.org/core/tag/4-7+dev-notes/">in-depth developer guides on make/core</a>. We’ve made <a href="https://core.trac.wordpress.org/log/trunk/src?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=39262&amp;stop_rev=39201&amp;limit=200&amp;verbose=on&amp;sfp_email=&amp;sfph_mail=">about 60 changes</a> in the last few days for beta 4, including tweaks to Twenty Seventeen, custom CSS, and the REST API content endpoints.</p>
<p>Do you speak a language other than English? <a href="https://translate.wordpress.org/projects/wp/dev">Help us translate WordPress into more than 100 languages!</a></p>
<p><strong>If you think you’ve found a bug</strong>, you can post to the <a href="https://wordpress.org/support/forum/alphabeta">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href="https://make.wordpress.org/core/reports/">file one on WordPress Trac</a>, where you can also find <a href="https://core.trac.wordpress.org/tickets/major">a list of known bugs</a>.</p>
<p><em>We are almost there<br />
Please test your plugins and themes<br />
RC coming soon<br />
</em></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4576";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:33:"









";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:34:"WordCamp US 2017-2018 in Nashville";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:70:"https://wordpress.org/news/2016/11/wordcamp-us-2017-2018-in-nashville/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 15 Nov 2016 23:24:17 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:8:"WordCamp";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4571";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:330:"The title says it all. We had some great applications for cities to host WordCamp US after we finish up in Philadelphia this year, and the city chosen for 2017-2018 is Nashville, Tennessee. Based on the other great applications we got I&#8217;m also excited about the pipeline of communities that could host it in future [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:1022:"<p><img class="aligncenter" src="https://i0.wp.com/wpdotorg.files.wordpress.com/2008/07/27492741871_c6fcebcad3_k-e1479248587522.jpg?resize=632%2C253&#038;ssl=1" data-recalc-dims="1" /></p>
<p>The title says it all. We had some great applications for cities to host <a href="http://us.wordcamp.org/">WordCamp US</a> after we finish up in Philadelphia this year, and the city chosen for 2017-2018 is <strong>Nashville, Tennessee</strong>.</p>
<p>Based on the other great applications we got I&#8217;m also excited about the pipeline of communities that could host it in future years as WordCamp US travels across the United States and gives us an opportunity to learn and love a new city, as we have with Philadelphia.</p>
<p>By the way, if you haven&#8217;t yet, now is a great time to <a href="https://wordpressdotorg.polldaddy.com/s/wordpress-2016-survey">take the Annual WordPress Survey</a> and ask your friends to as well.</p>
<p><a href="https://www.flickr.com/photos/143951935@N07/27492741871">Photo Credit</a>.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4571";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:39:"











";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:20:"WordPress 4.7 Beta 3";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2016/11/wordpress-4-7-beta-3/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 11 Nov 2016 03:30:52 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:3:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:2;a:5:{s:4:"data";s:3:"4.7";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4566";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:329:"WordPress 4.7 Beta 3 is now available! This software is still in development, so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.7, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Helen Hou-Sandi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:3120:"<p>WordPress 4.7 Beta 3 is now available!</p>
<p><strong>This software is still in development,</strong> so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.7, try the <a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href="https://wordpress.org/wordpress-4.7-beta3.zip">download the beta here</a> (zip).</p>
<p>For more information on what’s new in 4.7, check out the <a href="https://wordpress.org/news/2016/10/wordpress-4-7-beta-1/">Beta 1</a> and <a href="https://wordpress.org/news/2016/11/wordpress-4-7-beta-2/">Beta 2</a> blog posts, along with <a href="https://make.wordpress.org/core/tag/4-7+dev-notes/">in-depth field guides on make/core</a>. Some of the changes in Beta 3 include:</p>
<ul>
<li><strong>REST API:</strong> The <code>unfiltered_html</code> capability is now respected and <code>rest_base</code> has been added to response objects of <code>wp/v2/taxonomies</code> and <code>wp/v2/types</code>, while <code>get_allowed_query_vars()</code> and the <code>rest_get_post</code> filter have been removed.</li>
<li><strong>Roles/Capabilities:</strong> Added meta-caps for comment, term, and user meta, which are currently only used in the REST API.</li>
<li><strong>I18N:</strong> Added the ability to change user&#8217;s locale back to site&#8217;s locale. (<a href="https://core.trac.wordpress.org/ticket/38632">#38632</a>)</li>
<li><strong>Custom CSS:</strong> Renamed the <code>unfiltered_css</code> meta capability to <code>edit_css</code> and added revisions support to the <code>custom_css</code> post type.</li>
<li><strong>Edit shortcuts:</strong> Theme authors should take a look at <a href="https://make.wordpress.org/core/2016/11/10/visible-edit-shortcuts-in-the-customizer-preview/">the developer guide to the customizer preview&#8217;s visible edit shortcuts</a> and update their themes to take advantage of them if not already implementing selective refresh.</li>
<li><strong>Various bug fixes:</strong> We’ve made <a href="https://core.trac.wordpress.org/log/trunk/src?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=39200&amp;stop_rev=39143&amp;limit=200&amp;verbose=on&amp;sfp_email=&amp;sfph_mail=">over 50 changes</a> in the last week.</li>
</ul>
<p>Do you speak a language other than English? <a href="https://translate.wordpress.org/projects/wp/dev">Help us translate WordPress into more than 100 languages!</a></p>
<p><strong>If you think you’ve found a bug</strong>, you can post to the <a href="https://wordpress.org/support/forum/alphabeta">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href="https://make.wordpress.org/core/reports/">file one on WordPress Trac</a>, where you can also find <a href="https://core.trac.wordpress.org/tickets/major">a list of known bugs</a>.</p>
<p><em>Building the future</em><br />
<em>A global community</em><br />
<em>Stronger together</em></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4566";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:39:"











";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:20:"WordPress 4.7 Beta 2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2016/11/wordpress-4-7-beta-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 04 Nov 2016 17:39:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:3:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:2;a:5:{s:4:"data";s:3:"4.7";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4552";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:329:"WordPress 4.7 Beta 2 is now available! This software is still in development, so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.7, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Helen Hou-Sandi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:4240:"<p>WordPress 4.7 Beta 2 is now available!</p>
<p><strong>This software is still in development,</strong> so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.7, try the <a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href="https://wordpress.org/wordpress-4.7-beta2.zip">download the beta here</a> (zip).</p>
<p>Notable changes since WordPress 4.7 Beta 1:</p>
<ul>
<li><strong>Twenty Seventeen:</strong> The theme wasn&#8217;t being installed on upgrades &#8211; sorry about that! Now you should see it if you&#8217;re upgrading an existing site. There are also plenty of fixes, especially for the header and small screen views.</li>
<li><strong>Edit shortcuts:</strong> These are always visible while editing (hide them on bigger screens by collapsing the controls) and should now work properly in Firefox. (<a href="https://core.trac.wordpress.org/ticket/27403">#27403</a> and <a href="https://core.trac.wordpress.org/ticket/38532">#38532</a>)</li>
<li><strong>REST API endpoints:</strong> There have been a number of changes over the past week; your attention is requested on the following:
<ul>
<li>The <code>DELETE</code> response format has changed and may need to be accounted for. (<a href="https://core.trac.wordpress.org/ticket/38494">#38494</a>)</li>
<li>Enabled querying by multiple post statuses. (<a href="https://core.trac.wordpress.org/ticket/38420">#38420</a>)</li>
<li>Return an error when JSON decoding fails. (<a href="https://core.trac.wordpress.org/ticket/38547">#38547</a>)</li>
</ul>
</li>
<li><strong>More developer notes</strong>
<ul>
<li><a href="https://make.wordpress.org/core/2016/10/28/fine-grained-capabilities-for-taxonomy-terms-in-4-7/">Fine grained capabilities for taxonomy terms</a></li>
<li><a href="https://make.wordpress.org/core/2016/10/29/wp_taxonomy-in-4-7/"><code>WP_Taxonomy</code></a></li>
<li><a href="https://make.wordpress.org/core/2016/11/02/wp_list_sort-and-wp_list_util-in-4-7/"><code>wp_list_sort()</code> and <code>WP_List_Util</code></a></li>
<li><a href="https://make.wordpress.org/core/2016/11/03/post-type-templates-in-4-7/">Post type templates</a></li>
<li><a href="https://make.wordpress.org/core/2016/11/03/new-post-type-labels-in-4-7/">New post type labels</a></li>
<li><a href="https://make.wordpress.org/core/2016/11/03/attributes-for-resource-hints-in-4-7/">Attributes for resource hints</a></li>
</ul>
</li>
<li><strong>Various bug fixes:</strong> We’ve made <a href="https://core.trac.wordpress.org/log/trunk/src?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=39142&amp;stop_rev=38995&amp;limit=200&amp;verbose=on&amp;sfp_email=&amp;sfph_mail=">almost 150 changes</a> in the last week.</li>
</ul>
<p>For more of what’s new in version 4.7, <a href="https://wordpress.org/news/2016/10/wordpress-4-7-beta-1/">check out the Beta 1 blog post</a>.</p>
<p>If you want a more in-depth view of what major changes have made it into 4.7, <a href="https://make.wordpress.org/core/tag/4-7/">check out posts tagged with 4.7 on the main development blog</a>, or look at a <a href="https://core.trac.wordpress.org/query?status=closed&amp;resolution=fixed&amp;milestone=4.7&amp;group=component&amp;order=priority">list of everything</a> that’s changed. There will be more developer notes to come, so keep an eye out for those as well.</p>
<p>Do you speak a language other than English? <a href="https://translate.wordpress.org/projects/wp/dev">Help us translate WordPress into more than 100 languages!</a></p>
<p><strong>If you think you’ve found a bug</strong>, you can post to the <a href="https://wordpress.org/support/forum/alphabeta">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href="https://make.wordpress.org/core/reports/">file one on WordPress Trac</a>, where you can also find <a href="https://core.trac.wordpress.org/tickets/major">a list of known bugs</a>.</p>
<p>Happy testing!</p>
<p><em>Ya es la hora</em><br />
<em> Time for another beta</em><br />
请您帮下忙!</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4552";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:39:"











";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:20:"WordPress 4.7 Beta 1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2016/10/wordpress-4-7-beta-1/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 28 Oct 2016 04:30:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:3:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:2;a:5:{s:4:"data";s:3:"4.7";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4535";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:329:"WordPress 4.7 Beta 1 is now available! This software is still in development, so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.7, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Helen Hou-Sandi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:6895:"<p>WordPress 4.7 Beta 1 is now available!</p>
<p><strong>This software is still in development,</strong> so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.7, try the <a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href="https://wordpress.org/wordpress-4.7-beta1.zip">download the beta here</a> (zip).</p>
<p>WordPress 4.7 is slated for release on <a href="https://make.wordpress.org/core/4-7/">December 6</a>, but we need your help to get there. We&#8217;ve been working on a lot of things, many of them to make getting your site set up the way you want it much easier. Here are some of the bigger items to test and help us find as many bugs as possible in the coming weeks:</p>
<ul>
<li><a href="http://2017.wordpress.net/"><strong>Twenty Seventeen</strong></a> &#8211; A brand new default theme brings your site to life with immersive featured images, video headers, and subtle animations. With a focus on business sites, it features multiple sections on the front page as well as widgets, navigation and social menus, a logo, and more. Personalize its asymmetrical grid with a custom color scheme and showcase your multimedia content with post formats. Our default theme for 2017 works great in many languages, for any abilities, and on any device.</li>
<li><strong>Video Headers</strong> &#8211; Sometimes a big atmospheric video as a moving header image is just what you need to showcase your wares; go ahead and try it out with Twenty Seventeen. Need some video inspiration? Try searching for sites with video headers available for download and use.</li>
<li><strong>Set up your site in one flow</strong> &#8211; From finding and installing themes right inside the customizer, to automatically staged theme-specific starter content, to clickable shortcuts that jump directly to editing an item from the preview pane, to adding pages while you&#8217;re building a nav menu or setting a static front page: getting a new site spun up and ready to share with a friend or a coworker is faster and easier than it&#8217;s ever been. Note: starter content appears when live previewing brand new sites and is currently only available in Twenty Seventeen. We&#8217;ll be expanding this to other bundled themes very soon, and perhaps to sites with existing content in future releases of WordPress.</li>
<li><strong>Custom CSS with live previews</strong> &#8211; Ever needed to hide or tweak the look of something in your theme or from a plugin? Now you can do it with CSS and live preview the results while customizing your site. CSS can be a powerful tool; you may find that you won&#8217;t need the theme editor or child themes anymore.</li>
<li><strong>User admin languages</strong> &#8211; Just because your site is in one language doesn&#8217;t mean that everybody helping manage it prefers that language for their admin. To try this out, you&#8217;ll need to have more than one language installed, which will make a user language option available in your profile.</li>
<li><strong>PDF thumbnail previews</strong> &#8211; Uploading PDFs will now generate thumbnail images so you can more easily distinguish between all your documents.</li>
</ul>
<p>As always, there have been exciting changes for developers to explore as well, such as:</p>
<ul>
<li><strong>REST API content endpoints</strong> &#8211; If you only test one thing as a developer, please test these. This phase is particularly helpful for people building plugins, themes, and in-admin interfaces. Can you build the things you need? Are these ready for release, and is the world ready for them? (<a href="https://core.trac.wordpress.org/ticket/38373">#38373</a>)</li>
<li><strong><code>WP_Hook</code></strong> &#8211; The code that lies beneath actions and filters has been overhauled. You likely aren&#8217;t affected, but if you&#8217;ve done things to the <code>$wp_filter</code> global or experienced funky recursion bugs in the past, <a href="https://make.wordpress.org/core/2016/09/08/wp_hook-next-generation-actions-and-filters/">please take a moment to read the dev note</a> and test your code.</li>
<li><a href="https://make.wordpress.org/core/2016/10/04/custom-bulk-actions/"><strong>Custom bulk actions</strong></a> &#8211; List tables, now with more than bulk edit and delete.</li>
<li>Expanded <a href="https://make.wordpress.org/core/2016/10/26/registering-your-settings-in-wordpress-4-7/"><strong>Settings Registration API</strong></a> via <code>register_setting()</code>.</li>
<li>For theme developers: <strong>Post type templates</strong> (<a href="https://core.trac.wordpress.org/ticket/18375">#18375</a>)</li>
<li><strong><a href="https://make.wordpress.org/core/2016/09/09/new-functions-hooks-and-behaviour-for-theme-developers-in-wordpress-4-7/">More goodies for theme developers!</a></strong></li>
<li><strong>Locale switching</strong> (<a href="https://core.trac.wordpress.org/ticket/26511">#26511</a>)</li>
<li><a href="https://make.wordpress.org/core/2016/10/11/comment-allowed-checks-in-wordpress-4-7/"><strong>Comment allowed checks</strong></a> have the potential for a back-compat break.</li>
</ul>
<p>If you want a more in-depth view of what major changes have made it into 4.7, <a href="https://make.wordpress.org/core/tag/4-7/">check out posts tagged with 4.7 on the main development blog</a>, or look at a <a href="https://core.trac.wordpress.org/query?status=closed&amp;resolution=fixed&amp;milestone=4.7&amp;group=component&amp;order=priority">list of everything</a> that’s changed. There will be more developer notes to come, so keep an eye out for those as well.</p>
<p><strong>If you think you’ve found a bug</strong>, you can post to the <a href="https://wordpress.org/support/forum/alphabeta">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href="https://make.wordpress.org/core/reports/">file one on WordPress Trac</a>, where you can also find <a href="https://core.trac.wordpress.org/tickets/major">a list of known bugs</a>.</p>
<p>Happy testing, and please enjoy this extended haiku break, courtesy of <a href="https://profiles.wordpress.org/ramiabraham">Rami Abraham</a><em>.</em></p>
<p><em>Exquisite endpoints</em><br />
<em>Extol epic exabytes</em><br />
<em>Enabling earthlings</em></p>
<p><em>Careful interfaces</em><br />
<em>Considerately conjured</em><br />
<em>Customizer chic</em></p>
<p><em>Ring in the new year</em><br />
<em>With elegance and balance</em><br />
<em>Twenty Seventeen</em></p>
<p><em>Hooks hook healthily</em><br />
<em>17817</em><br />
<em>Sane iterations</em></p>
<p><em>Admin in your tongue<br />
One site, many languages<br />
We all speak WordPress</em></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4535";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:45:"













";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:50:"Join Us Again for Global WordPress Translation Day";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:86:"https://wordpress.org/news/2016/10/join-us-again-for-global-wordpress-translation-day/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 14 Oct 2016 13:33:57 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:5:{i:0;a:5:{s:4:"data";s:9:"Community";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:19:"contributor weekend";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:2;a:5:{s:4:"data";s:32:"global wordpress translation day";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:3;a:5:{s:4:"data";s:9:"polyglots";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:4;a:5:{s:4:"data";s:12:"translations";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4516";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:373:"The WordPress Polyglots team is organizing the second Global WordPress Translation Day on November 12th. Everyone is invited to join – from anywhere in the world! Translating is one of the easiest ways to get involved with WordPress and contribute to the project. Global WordPress Translation Day is your chance to learn more about translating WordPress, meet [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Petya Raykovska";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:4273:"<p>The WordPress Polyglots team is organizing the second <a href="https://wptranslationday.org/">Global WordPress Translation Day</a> on November 12th. Everyone is invited to join – from anywhere in the world!</p>
<p>Translating is one of the easiest ways to get involved with WordPress and contribute to the project. Global WordPress Translation Day is your chance to learn more about translating WordPress, meet people from all over the world, and <a href="https://make.wordpress.org/polyglots/teams">translate WordPress into one of more than 160 languages</a>.</p>
<h3>Join us on November 12th from anywhere in the world</h3>
<p>The translation day starts on Saturday, November 12th, 2016, at 0:00 UTC and ends 24 hours later. <a href="http://arewemeetingyet.com/UTC/2016-11-12/00:00/Global%20WordPress%20Translation%20Day%202">See what time that is for you!</a> You can join right from the start, or any time it&#8217;s convenient for you throughout the day.</p>
<h3>What are we doing?</h3>
<p>Local contributor days are happening all over the world, and are a great way to get involved. <a href="https://www.google.com/maps/d/viewer?mid=12Gni4JMfShyWHPqGNwh5-PMneMM&amp;usp=sharing">Check out this map</a> to see if there&#8217;s already a local event happening near you. Can&#8217;t find one? <a href="https://make.wordpress.org/polyglots/2016/09/22/global-wordpress-translation-day-2-on-november-12th-2016/">Organize a local event!</a></p>
<p>At the same time, <a href="https://www.crowdcast.io/e/gwtd2/register">join the community for 24 hours of live-streamed, remote sessions</a> in numerous languages. Sessions will cover localization, internationalization, and contributing in your language.</p>
<h3>Who&#8217;s it for?</h3>
<p>Whether you&#8217;re new to translating and want to learn how to translate, or an experienced translation editor building a strong team, the translation day is for <i>you</i>. Developers will also enjoy topics from experienced contributors, whether you&#8217;re learning about internationalization and or want to find more translators for your themes and plugins. There&#8217;s a session for everyone!</p>
<h3>Get Involved</h3>
<p>Joining is easy! On November 12th, in your own timezone, <a href="https://translate.wordpress.org">translate WordPress</a> or your favorite plugins and themes into your language, while watching live sessions over the course of the day.</p>
<p>Want to get more involved? <a href="https://make.wordpress.org/polyglots/2016/09/22/global-wordpress-translation-day-2-on-november-12th-2016/">Sign up to organize a local event</a> and invite your local community to translate together on November 12th. Events can be formal or completely informal – grab your laptop and a couple of friends, and head to a local coffee shop to translate for an hour or two.</p>
<h3>Can you get involved if you only speak English?</h3>
<p>Absolutely! Even if you only speak English, there are great sessions about internationalization that can benefit every developer. There&#8217;s also lots of English variants that need your help! For example, English is spoken and written differently in Australia, Canada, New Zealand, South Africa, and the United Kingdom. You can learn about these differences and why these variants are important during the sessions.</p>
<p>And if you’re feeling fun, try translating WordPress into emoji! Yep, we have a translation of WordPress in emoji! <img src="https://s.w.org/images/core/emoji/2.2.1/72x72/1f30e.png" alt="?" class="wp-smiley" style="height: 1em; max-height: 1em;" /><img src="https://s.w.org/images/core/emoji/2.2.1/72x72/1f30d.png" alt="?" class="wp-smiley" style="height: 1em; max-height: 1em;" /><img src="https://s.w.org/images/core/emoji/2.2.1/72x72/1f30f.png" alt="?" class="wp-smiley" style="height: 1em; max-height: 1em;" /></p>
<h3>Questions?</h3>
<p>If you have any questions, the polyglots team and the event organizers hang out in <a href="http://wordpress.slack.com/messages/polyglots/">#polyglots in Slack</a> and are happy to help! (Get an invite to Slack at <a href="https://chat.wordpress.org">chat.wordpress.org</a>.)</p>
<p>Sign up to take part in the event on the <a href="https://wptranslationday.org/">official website</a>.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4516";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:39:"











";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:4:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:48:"WordPress 4.6.1 Security and Maintenance Release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:84:"https://wordpress.org/news/2016/09/wordpress-4-6-1-security-and-maintenance-release/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 07 Sep 2016 15:52:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:3:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Security";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:2;a:5:{s:4:"data";s:3:"4.6";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=4507";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:377:"WordPress 4.6.1 is now available. This is a security release for all previous versions and we strongly encourage you to update your sites immediately. WordPress versions 4.6 and earlier are affected by two security issues: a cross-site scripting vulnerability via image filename, reported by SumOfPwn researcher Cengiz Han Sahin; and a path traversal vulnerability in [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Jeremy Felt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:2757:"<p>WordPress 4.6.1 is now available. This is a <strong>security release</strong> for all previous versions and we strongly encourage you to update your sites immediately.</p>
<p>WordPress versions 4.6 and earlier are affected by two security issues: a cross-site scripting vulnerability via image filename, reported by SumOfPwn researcher <a href="https://twitter.com/cengizhansahin">Cengiz Han Sahin</a>; and a path traversal vulnerability in the upgrade package uploader, reported by <a href="https://dominikschilling.de/">Dominik Schilling</a> from the WordPress security team.</p>
<p>Thank you to the reporters for practicing <a href="https://make.wordpress.org/core/handbook/testing/reporting-security-vulnerabilities/">responsible disclosure</a>.</p>
<p>In addition to the security issues above, WordPress 4.6.1 fixes 15 bugs from 4.6. For more information, see the <a href="https://codex.wordpress.org/Version_4.6.1">release notes</a> or consult the <a href="https://core.trac.wordpress.org/query?milestone=4.6.1">list of changes</a>.</p>
<p><a href="https://wordpress.org/download/">Download WordPress 4.6.1</a> or venture over to Dashboard → Updates and simply click “Update Now.” Sites that support automatic background updates are already beginning to update to WordPress 4.6.1.</p>
<p>Thanks to everyone who contributed to 4.6.1:</p>
<p><a href="https://profiles.wordpress.org/azaozz">Andrew Ozz</a>, <a href="https://profiles.wordpress.org/gitlost">bonger</a>, <a href="https://profiles.wordpress.org/boonebgorges">Boone Gorges</a>, <a href="https://profiles.wordpress.org/chaos-engine">Chaos Engine</a>, <a href="https://profiles.wordpress.org/danielkanchev">Daniel Kanchev</a>, <a href="https://profiles.wordpress.org/dd32">Dion Hulse</a>, <a href="https://profiles.wordpress.org/drewapicture">Drew Jaynes</a>, <a href="https://profiles.wordpress.org/flixos90">Felix Arntz</a>, <a href="https://profiles.wordpress.org/frozzare">Fredrik Forsmo</a>, <a href="https://profiles.wordpress.org/pento">Gary Pendergast</a>, <a href="https://profiles.wordpress.org/geminorum">geminorum</a>, <a href="https://profiles.wordpress.org/iandunn">Ian Dunn</a>, <a href="https://profiles.wordpress.org/ionutst">Ionut Stanciu</a>, <a href="https://profiles.wordpress.org/jeremyfelt">Jeremy Felt</a>, <a href="https://profiles.wordpress.org/joemcgill">Joe McGill</a>, <a href="https://profiles.wordpress.org/clorith">Marius L. J. (Clorith)</a>, <a href="https://profiles.wordpress.org/swissspidy">Pascal Birchler</a>, <a href="https://profiles.wordpress.org/rpayne7264">Robert D Payne</a>, <a href="https://profiles.wordpress.org/sergeybiryukov">Sergey Biryukov</a>, and <a href="https://profiles.wordpress.org/nmt90">Triet Minh</a>.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:7:"post-id";a:1:{i:0;a:5:{s:4:"data";s:4:"4507";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:32:"https://wordpress.org/news/feed/";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:44:"http://purl.org/rss/1.0/modules/syndication/";a:2:{s:12:"updatePeriod";a:1:{i:0;a:5:{s:4:"data";s:6:"hourly";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:15:"updateFrequency";a:1:{i:0;a:5:{s:4:"data";s:1:"1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:30:"com-wordpress:feed-additions:1";a:1:{s:4:"site";a:1:{i:0;a:5:{s:4:"data";s:8:"14607090";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:"' . "\0" . '*' . "\0" . 'data";a:9:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Mon, 09 Jan 2017 19:24:15 GMT";s:12:"content-type";s:34:"application/rss+xml; charset=UTF-8";s:25:"strict-transport-security";s:11:"max-age=360";s:6:"x-olaf";s:3:"⛄";s:13:"last-modified";s:29:"Tue, 06 Dec 2016 19:27:41 GMT";s:4:"link";s:63:"<https://wordpress.org/news/wp-json/>; rel="https://api.w.org/"";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:11:"HIT lax 249";}}s:5:"build";s:14:"20130911040210";}',
                'autoload' => 'no',
            ),
            115 => 
            array (
                'option_id' => 121,
                'option_name' => '_transient_timeout_feed_mod_ac0b00fe65abe10e0c5b588f3ed8c7ca',
                'option_value' => '1484033055',
                'autoload' => 'no',
            ),
            116 => 
            array (
                'option_id' => 122,
                'option_name' => '_transient_feed_mod_ac0b00fe65abe10e0c5b588f3ed8c7ca',
                'option_value' => '1483989855',
                'autoload' => 'no',
            ),
            117 => 
            array (
                'option_id' => 123,
                'option_name' => '_transient_timeout_feed_d117b5738fbd35bd8c0391cda1f2b5d9',
                'option_value' => '1484033055',
                'autoload' => 'no',
            ),
            118 => 
            array (
                'option_id' => 124,
                'option_name' => '_transient_feed_d117b5738fbd35bd8c0391cda1f2b5d9',
                'option_value' => 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"


";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:61:"
























































";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"WordPress Planet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:28:"http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"en";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:47:"WordPress Planet - http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:50:{i:0;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"WPTavern: How Laravel Forge Can Help You Run WordPress in the Cloud";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64940";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:78:"https://wptavern.com/how-laravel-forge-can-help-you-run-wordpress-in-the-cloud";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7837:"<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2015/05/petersuhm.jpeg?ssl=1"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2015/05/petersuhm.jpeg?resize=150%2C150&ssl=1" alt="petersuhm" class="alignright size-thumbnail wp-image-43613" /></a>This opinion piece was contributed by guest author <a href="https://twitter.com/petersuhm" target="_blank">Peter Suhm</a>. Peter is a web developer from the Land of the Danes. He is the creator of <a href="https://wppusher.com/" target="_blank">WP Pusher</a> and a huge travel addict, bringing his work along with him as he goes.<br />
&nbsp;</p>
<hr />
<p><a href="http://forge.laravel.com/" target="_blank">Laravel Forge</a> is a server and application provisioning tool that was originally built to serve the Laravel PHP crowd. Recently, it has been made available to WordPress developers too, with the introduction of 1-click installs of WordPress on Digital Ocean, Linode and AWS cloud servers. In this post, I&#8217;ll give you a brief introduction to Laravel Forge and show you how you can use it to manage all of your WordPress installations in the cloud.</p>
<h3>Laravel Forge is good news for WordPress developers</h3>
<p>Because so many WordPress developers are used to managed hosting, the thought of running their own servers seem quite intimidating. That&#8217;s a shame with so many great cloud server companies offering virtual servers for very low costs. Unless your traffic is very heavy, a small ($5 to $10 per month) server can run quite a few WordPress websites. Laravel Forge takes care of provisioning your servers and can even setup your database and install WordPress for you. This makes cloud hosting much more available to WordPress developers at a low cost (Laravel Forge is $15 per month for unlimited servers), compared to many of the existing options.</p>
<p>Here are a few reasons why I think Laravel Forge is great for WordPress hosting:</p>
<ul>
<li>Your servers are configured in a secure way by default, with SSH authentication, firewalls, automatic security updates and free SSL certificates from Let&#8217;s Encrypt</li>
<li>Your servers are going to be really fast with PHP 7</li>
<li>You can run a lot of WordPress installs on 1 single server *</li>
<li>You can scale your servers if you need more horse power *</li>
</ul>
<p><em>* Goes for the cloud in general</em></p>
<h3>Creating a new server</h3>
<p>Here is how the &#8220;Create Server&#8221; screen looks in Forge:</p>
<p><a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2017/01/create-server-e1483980109591.png?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2017/01/create-server-e1483980109591.png?resize=1025%2C416&ssl=1" alt="" class="aligncenter size-full wp-image-64946" /></a></p>
<p>If you use Digital Ocean, Forge can also create your servers. If you use another provider like Linode or AWS, Forge can only do the provisioning part.</p>
<p>For Digital Ocean servers, here are the options you can configure:</p>
<ul>
<li>Which credentials to use, if you are managing multiple Digital Ocean accounts</li>
<li>The server name</li>
<li>The server size</li>
<li>The server region</li>
<li>The PHP version</li>
<li>The default database name</li>
</ul>
<p>You can then choose to:</p>
<ul>
<li>Configure the server as a load balancer (if you have really heavy traffic and is running WordPress across multiple servers)</li>
<li>Install <a href="https://mariadb.org/" target="_blank">MariaDB</a> instead of MySQL, which is a drop-in, faster replacement</li>
<li>Enable weekly backups on Digital Ocean</li>
</ul>
<p>When Laravel Forge is done with the provisioning, your server is ready to go.</p>
<h3>Setting up a database</h3>
<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2017/01/set-up-database-e1483980726266.png?ssl=1"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2017/01/set-up-database-e1483980726266.png?resize=1025%2C484&ssl=1" alt="" class="aligncenter size-full wp-image-64949" /></a></p>
<p>Once your server has been created, setting up a database for your WordPress installation is very easy. You can create the user at the same time you&#8217;re creating the database, or you can create the user afterwards.</p>
<h3>Installing WordPress</h3>
<p>Before you install WordPress, you need to create a new &#8220;site&#8221; on your server. You can just stick with the defaults:</p>
<p><a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2017/01/new-site-e1483981223250.png?ssl=1"><img src="https://i1.wp.com/wptavern.com/wp-content/uploads/2017/01/new-site-e1483981223250.png?resize=1025%2C453&ssl=1" alt="" class="aligncenter size-full wp-image-64951" /></a></p>
<p>For the &#8220;Root Domain&#8221;, you need to add the domain name of the site you are setting up. Remember that you need to add a DNS record for your domain that points to the IP address of your newly created server. If you are just testing, you can always add a record in your computer&#8217;s <code>hosts</code> file with a test domain that points to your server. Something like this:</p>
<p><code># /etc/hosts</code></p>
<p><code># Replace xx.xx.xx.xx with your server\'s IP address<br />
xx.xx.xx.xx wordpress-forge.test</code></p>
<p>Once you click the &#8220;Add Site&#8221; button, you will see a spinning wheel while Forge is setting up your site&#8217;s nginx configuration.</p>
<p>When the installation is done, you need to click the &#8220;Manage&#8221; icon next to your site in order to install WordPress. The first screen you will be presented with gives you the option to install an &#8220;App&#8221; on your site. Click the &#8220;WordPress&#8221; button, select your database and user from the previous step and relax while Laravel Forge completes the installation. Fun fact: Laravel Forge is actually using WP-CLI to install WordPress on your server.</p>
<p>When the installation has completed, visit your site in a browser and you&#8217;ll be met with something familiar:</p>
<p><a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2017/01/wp-install-e1483984375432.png?ssl=1"><img src="https://i1.wp.com/wptavern.com/wp-content/uploads/2017/01/wp-install-e1483984375432.png?resize=1025%2C625&ssl=1" alt="" class="aligncenter size-full wp-image-64962" /></a></p>
<h3>Setting up a free SSL certificate</h3>
<p>Finally, you should set up SSL for your WordPress site. It&#8217;s more secure and Google likes it!</p>
<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2017/01/ssl-setup.png?ssl=1"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2017/01/ssl-setup.png?resize=1025%2C288&ssl=1" alt="" class="aligncenter size-full wp-image-64963" /></a></p>
<p>Head over on the &#8220;SSL&#8221; tab and click the &#8220;LetsEncrypt (Beta)&#8221; button. Click the &#8220;Obtain Certificate&#8221; button and wait while Forge creates and installs the certificate. Once the certificate is installed, click the &#8220;Activate&#8221; icon and voila! Your site is now all set up and secured with SSL.</p>
<p>That&#8217;s how easy it is to setup WordPress on a cloud server with Laravel Forge. I hope to see a lot of more products and tools like this that can help us building better, faster, and more secure WordPress websites. In fact, Laravel Forge was the original inspiration for my own product <a href="https://wppusher.com/" target="_blank">WP Pusher</a>. I wanted to create a similar experience, but for WordPress plugins and themes instead.</p>
<h3>Note on backups and security</h3>
<p><em>Please note that even though Laravel Forge makes for a great starting point, ultimately you are the one in charge of the security of your servers. You should always try to educate yourself about security and have a backup strategy for your data.</em></p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 09 Jan 2017 18:44:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:45:"Post Status: Contributing to Twenty Seventeen";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:31:"https://poststatus.com/?p=31886";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"https://poststatus.com/contributing-to-twenty-seventeen-theme/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:12307:"<p><em><strong>Editor&#8217;s Note</strong>: This is a guest post by <a href="https://poststatus.com/profiles/sami-keijonen/">Sami Keijonen</a>. Sami is a developer, the owner of the <a href="https://foxland.fi/">Foxland theme and plugin shop</a>, and hails from Finland.</em></p>
<p>Every year since 2010, WordPress has shipped with a new default theme, breaking the cycle of Kubrick being the primary default theme for years before that.</p>
<p>In 2010, the default theme was called Twenty Ten. In 2011, the default theme was called Twenty Eleven. You get the idea.</p>
<p>While every default theme has been unique in its own way, <a href="https://wordpress.org/themes/twentyseventeen/">Twenty Seventeen</a> was particularly compelling in a way we haven’t seen in a default theme since Twenty Fourteen.</p>
<p><a href="https://wordpress.org/themes/twentyfourteen/">Twenty Fourteen</a> was the first theme that really made people think WordPress could be used for more than “just a blog” on a mass scale. It is a magazine theme.</p>
<p>Twenty Seventeen &#8212; <a href="https://poststatus.com/wordpress-4-7-released/">released with WordPress 4.7</a> &#8212; is the first theme that really made people think WordPress could be used for more than “just publishing content” on a mass scale. It is a business theme.</p>
<p><img class="aligncenter wp-image-32027 size-large" src="https://cdn.poststatus.com/wp-content/uploads/2017/01/twenty-seventeen-wp-about-752x423.jpg" alt="Twenty Seventeen WordPress Theme Screenshots" width="752" height="423" /></p>
<p>Prior to WordPress 4.7, I contributed by helping out in the support forums and building <a href="https://foxland.fi/downloads/category/themes/">accessible themes</a>. But I had never contributed to core before.</p>
<p>When I saw the <a href="https://make.wordpress.org/core/2016/09/09/say-hello-to-twenty-seventeen-%25F0%259F%2591%258B%25F0%259F%258F%25BD/">previews</a>, I knew I wanted to contribute, and began to follow development on GitHub to see if there was anything that I could lend my talents to and eventually make my first core contributions.</p>
<p>When I saw Morten Rand-Hendriksen <a href="https://github.com/WordPress/twentyseventeen/issues/60">open an issue</a> about replacing icon fonts with SVG icons, I knew I had found the perfect “in” to start contributing to core.</p>
<h3>Contributing SVG icons system to Twenty Seventeen</h3>
<p><img class="aligncenter wp-image-32026 size-large" src="https://cdn.poststatus.com/wp-content/uploads/2017/01/svg-twentyseventeen-icons-752x217.png" alt="Example image of SVG icon set" width="752" height="217" /></p>
<p>I had already <a href="https://foxland.fi/switch-away-icon-fonts-svg/">switched from icon fonts to SVG icons</a> in my public themes, so this was something I immediately felt confident in contributing to core.</p>
<p>Development started in <a href="https://github.com/WordPress/twentyseventeen/">GitHub</a>, where fellow contributors would create issues and submit pull requests.</p>
<p>Then, everything moved to <a href="https://core.trac.wordpress.org/browser/trunk">WordPress SVN</a>, where new patches were submitted.</p>
<p>I’ll summarize what I learned in the process.</p>
<h3>What I learned about contributing</h3>
<p>I regret not keeping a diary. Not necessarily to keep track of what I contributed, since that’s all documented in the open.</p>
<p>But rather things like my emotional state. My feelings ranged from despair to overwhelming joy throughout my contribution experience.</p>
<p>I learned new things about code and collaborating with others in GitHub and SVN. Again, something not necessarily documented in patches and the like.</p>
<h4>Git workflow</h4>
<p>I’m not good with Git, and still don’t fully understand how rebasing works. I messed up my commits a couple of times. Not a big deal, but I got different error messages no matter which workflow I tried. I realized that I need to know more about Git, and be more patient.</p>
<p>Eventually I understood enough to get my contributions through the door, but I’m still confused about <a href="https://github.com/edx/edx-platform/wiki/How-to-Rebase-a-Pull-Request">how to rebase a pull request</a>.</p>
<h4>Follow the development through to the end, and beyond</h4>
<p>I started out by replacing only the social link icon fonts to SVG icons. Soon, I realized that a step-by-step process was not going to work because of new related commits coming in all the time that potentially conflicted with my code.</p>
<p>It was better to replace all icon fonts, not just the social ones, with SVGs, and then work from there. I was also keeping track of style changes in RTL languages and IE8.</p>
<p>At this point, the work was just getting started.</p>
<p>Once you start contributing, you shouldn&#8217;t just disappear with no explanation. If you’re running low on time or have other obligations, it’s totally understandable, but be sure to politely inform others you can’t continue anymore, so they can pick up where you left off.</p>
<p>As the <a href="https://geto2.com/">o2</a> slogan states: &#8220;Communication is oxygen.&#8221;</p>
<h4>Coding standards and automated tests</h4>
<p>After several commits and iterations, <a>my first pull request was accepted</a>.</p>
<p>As you can see in my first commits, I didn’t pass the WordPress coding standards. I needed to be more precise and follow the coding standards to the tee. With enough practice, I’m sure it’s possible to write standards-compliant code “naturally” but I was looking for a way to automate the code checks.</p>
<p>I tried to get Atom to evaluate my code on the fly, but I just couldn’t get it to work. Like my Git experience, I got different error messages no matter what I tried.</p>
<p>Eventually, I was able to use <a href="https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards">PHPCS</a> via the command line, and fixed any issues discovered manually. But it would’ve been nice to have those checks automated.</p>
<h4>Working with batches in SVN</h4>
<p>Once the development moved to SVN, I began to get a little worried. As I described earlier, not too long ago, I was struggling just to use Git. However, thanks to the following tutorials I quickly got up to speed.</p>
<ul>
<li><a href="https://make.wordpress.org/core/handbook/tutorials/installing-wordpress-locally/from-svn/">Installing via SVN</a></li>
<li><a href="https://make.wordpress.org/core/handbook/tutorials/installing-a-vcs/%23installing-tortoisesvn">Installing TortoiseSVN</a> (I use Windows)</li>
<li><a href="https://make.wordpress.org/core/handbook/tutorials/trac/submitting-a-patch/">Submitting a Patch</a></li>
<li><a href="https://make.wordpress.org/core/handbook/tutorials/working-with-patches/%23creating-a-patch-with-tortoisesvn">Creating a Patch with TortoiseSVN</a></li>
</ul>
<p>Turns out, it wasn’t much to be worried about. Although I didn’t quite understand the concept of branches and tags in my local environments, and jumping between them like I know how to do with Git.</p>
<p>Anyway, I eventually got <a href="https://core.trac.wordpress.org/changeset/39072">my first props</a> with the help of others.</p>
<h3>Technical overview of the SVG icons system</h3>
<p>I adapted this contribution from the code and concepts first presented by others.</p>
<ol>
<li><a href="https://webdevstudios.com/">WebDevStudios</a> has their own starter theme called <a href="https://github.com/WebDevStudios/wd_s">wd_s</a>. I really like how they set up SVG icons and we fine-tuned them in Twenty Seventeen. Perhaps they will integrate those improvements back into their own project. Again, open source rocks.</li>
<li><a href="http://themehybrid.com/">Justin Tadlock</a> invented the <a href="http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2">social links menu</a> concept. I just took that concept and applied it to SVG icons rather than icon fonts.</li>
</ol>
<p>All the main SVG-related functions can be found in the <a href="https://core.trac.wordpress.org/browser/trunk/src/wp-content/themes/twentyseventeen/inc/icon-functions.php">inc/icon-functions.php file</a>. It’s well-documented in the code, but here’s a summary:</p>
<ul>
<li>Include the SVG sprite file via the <code>wp_footer</code> hook.</li>
<li><code>twentyseventeen_get_svg()</code> function returns the SVG icon markup. In most cases, the SVG icon is injected in template files or via hooks and filters. In some cases, the SVG icon is injected via JavaScript.</li>
<li>Default markup looks like this: <code>&lt;svg class="icon icon-name" aria-hidden="true" role="img"&gt; &lt;use href="#icon-name" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-name"&gt;&lt;/use&gt; &lt;/svg&gt;</code>.</li>
<li>Note that we could use the absolute path to the SVG file in the <code>href</code> attribute of the use element. In that case:
<ul>
<li>there is no need to inject icons via the <code>wp_footer</code> hook.</li>
<li>The <a href="https://github.com/Keyamoon/svgxuse">svgxuse</a> JS polyfill must be used, because Internet Explorer doesn’t support external files referenced in the <code>&lt;use&gt;</code> element.</li>
<li>This method helps caching the SVG sprite file.</li>
</ul>
</li>
<li>By default, all icons are decorative, but I insisted we show how to use non-decorative icons in an accessible way. Check the examples in the aforementioned <code>twentyseventeen_get_svg()</code> function.</li>
<li>We replace the default icon for supported social media links by using the <code>walker_nav_menu_start_el</code> filter.</li>
</ul>
<h3>Open source rocks</h3>
<p>WordPress default themes are one of the best themes out there and they set an example how to use new WordPress features. The reason for this is simple.</p>
<ul>
<li>Default themes gets lots of love and attention.</li>
<li>Many talented people contribute to default themes. <a href="https://davidakennedy.com/2016/12/07/dear-twenty-seventeen-contributors/">Twenty Seventeen had over 100 contributors</a> and we thank you all!</li>
<li>Default themes are tested before release in many platforms and browsers. And default themes are used on so many sites that any remaining bugs will be found after the release.</li>
</ul>
<p>Building default themes really is a community driven project. I&#8217;d like to say extra thanks for couple of people.</p>
<h4>Special thank you</h4>
<p>Any web project needs good leadership, design, and code. Those were all covered in Twenty Seventeen.</p>
<ul>
<li><a href="https://twitter.com/DavidAKennedy">David A. Kennedy</a> was leading the project and kept everything rolling. He had a really friendly touch and he was open to ideas. At the same time he wasn&#8217;t afraid to make decisions; for example, a flexbox layout was rejected for this theme.</li>
<li><a href="https://twitter.com/melchoyce">Mel Choyce</a> created the modern, business looking design. She wrote a great article <a href="https://choycedesign.com/2016/12/07/behind-the-scenes-of-twenty-seventeen/">with her behind the scenes take</a>.</li>
<li><a href="https://twitter.com/laurelfulford">Laurel Fulford</a> was the primary coding lead. She seem to have a solution for every new feature and brought Mel&#8217;s design to life with detailed code.</li>
</ul>
<p>Last but not least, remember <a href="http://mor10.com/">Morten Rand-Hendriksen</a>, the one that opened the SVG icon issue that caught my eye?</p>
<p>He was pretty happy with the end result.</p>
<blockquote class="twitter-tweet">
<p lang="en" dir="ltr"><a href="https://twitter.com/brad_frost">@brad_frost</a> the SVG icon system solution by <a href="https://twitter.com/samikeijonen">@samikeijonen</a> embedded in the new Twenty Seventeen theme in <a href="https://twitter.com/hashtag/WordPress?src=hash">#WordPress</a> is pure genius</p>
<p>&mdash; MortenRandHendriksen (@mor10) <a href="https://twitter.com/mor10/status/805808154520883200">December 5, 2016</a></p></blockquote>
<p></p>
<p>Who knows if I would’ve contributed if it wasn’t for him posting that. Remember, reporting issues and bugs is contributing too, and can inspire first-time contributors like me to stop sitting on the sidelines and finally get started with core contributions.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 07 Jan 2017 22:42:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sami Keijonen";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:71:"WPTavern: Let’s Encrypt Passes 20 Million Active Certificates in 2016";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64815";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:79:"https://wptavern.com/lets-encrypt-passes-20-million-active-certificates-in-2016";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5050:"<p>Let&#8217;s Encrypt has just closed out its first full year as a certificate authority with more than <a href="https://letsencrypt.org/2017/01/06/le-2016-in-review.html" target="_blank">20 million active certificates</a>. The free and open certificate authority focuses on lowering the complexity of setting up TLS encryption by making the process more automated. It came <a href="https://wptavern.com/lets-encrypt-is-now-out-of-beta" target="_blank">out of beta</a> in April 2016 and the number of certificates issued per day has grown steadily since then.</p>
<p>&#8220;At the start of 2016, Let’s Encrypt certificates had been available to the public for less than a month and we were supporting approximately 240,000 active (unexpired) certificates,&#8221; said Josh Aas, Executive Director of the non-profit Internet Security Research Group (ISRG). &#8220;Now we’re frequently issuing that many new certificates in a single day while supporting more than 20,000,000 active certificates in total. We’ve issued more than a million certificates in a single day a few times recently.&#8221;</p>
<p><a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2017/01/lets-encrypt-2016.png?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2017/01/lets-encrypt-2016.png?resize=1025%2C503&ssl=1" alt="" class="aligncenter size-full wp-image-64920" /></a></p>
<p>Let&#8217;s Encrypt operates as a 501(c)(3) nonprofit and has received more than three dozen corporate <a href="https://letsencrypt.org/sponsors/" target="_blank">sponsorships</a> and grants, but funds for the coming year have fallen short. In November, Let&#8217;s Encrypt launched a <a href="https://www.generosity.com/community-fundraising/make-a-more-secure-web-with-let-s-encrypt" target="_blank">crowdfunding campaign</a> to cover the cost of one month of operating expenses. So far, the campaign has raised more than $100K towards its $200K fundraising goal.</p>
<h3>Let&#8217;s Encrypt is Growing Fastest with Smaller, Previously-Unencrypted Sites</h3>
<p>Let&#8217;s Encrypt is used with some larger organizations, such as WordPress.com, OVH, Shopify, Akamai, and Dreamhost, but the vast majority of users are smaller entities that were not previously encrypted. According to the Electronic Frontier Foundation (EFF), a founding sponsor of the certificate authority, most of Let&#8217;s Encrypt&#8217;s growth has not come from taking customers away from competitors:</p>
<blockquote><p>
One of the ways Let&#8217;s Encrypt has been helping to secure the web is by making it easy and affordable for sites that have never had certs before to turn on secure HTTPS connections, and for software systems to start enabling HTTPS automatically and by default. Our free certificates may be more likely to be left unused than expensive certificates, and less expert webmasters may accidentally duplicate certificates—but that’s part of making HTTPS integration available to more webmasters across a range of resource and skill levels. Statistics suggest that most of our growth has come not at the expense of other CAs, but from giving previously unencrypted sites their first-ever certificates.</p></blockquote>
<p>EFF analyzed various sources of usage statistics and estimates that <a href="https://www.eff.org/deeplinks/2016/10/lets-encrypt-largest-certificate-authority-web" target="_blank">Let&#8217;s Encrypt is now the largest certificate authority on the web</a>. Its rapid adoption has spurred impressive progress towards getting the entire web encrypted. Let&#8217;s Encrypt tracks progress by measuring the percentage of page loads using HTTPS, as seen by browsers.</p>
<p>&#8220;According to Firefox Telemetry, the Web has gone from approximately 39% of page loads using HTTPS each day to just about 49% during the past year,&#8221; Aas said in Let&#8217;s Encrypt&#8217;s <a href="https://letsencrypt.org/2017/01/06/le-2016-in-review.html" target="_blank">2016 in Review</a> report. &#8220;We’re incredibly close to a Web that is more encrypted than not.&#8221;</p>
<p>The proliferation of Let&#8217;s Encrypt <a href="https://letsencrypt.org/docs/client-options/" target="_blank">client options</a> in 2016 puts the certificate authority in an even better position to continue driving web encryption in 2017. Aas attributes last year&#8217;s progress to many organizations advocating for HTTPS and working to get their sites encrypted. His team has grown from four full-time employees to nine, and he anticipates that 2017 will be a year of even greater growth.</p>
<p>&#8220;Much of the infrastructure and many of the plans necessary for a 100% encrypted Web came into being or solidified in 2016,&#8221; Aas said. &#8220;More and more hosting providers and CDNs are supporting HTTPS with one click or by default, often without additional fees. It has never been easier for people and organizations running their own sites to find the tools, services, and information they need to move to HTTPS.&#8221;</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 07 Jan 2017 21:42:52 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:53:"WPTavern: How Do You Educate People New to WordPress?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64890";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:63:"https://wptavern.com/how-do-you-educate-people-new-to-wordpress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5213:"<p>When a friend of mine asked for suggestions on what he should use to create a new site, I suggested WordPress. It is well supported, has an amazing community, and a ton of free themes and plugins to choose from. After getting WordPress installed on a new webhosting account, I left him be to see what issues he would run into and how he would configure the site.</p>
<p>After noticing the site was loading slowly three weeks later, I obtained admin access to try to determine what the problem was. The first thing I did was check which plugins he installed. One of the plugins added the ability to embed YouTube videos on the site using shortcodes. My friend was unaware that WordPress has <a href="https://codex.wordpress.org/Embeds">oEmbed support</a> which allows users to easily embed videos by pasting the URL into the editor.</p>
<p>He also installed a couple of other plugins that mimicked core functionality. He was unaware that WordPress does most of the things he wants without the need for plugins.</p>
<h2>Page Builder Shenanigans</h2>
<p>After activating a theme that was compatible with the <a href="https://wordpress.org/plugins/sportspress/">SportsPress</a> plugin, he installed the <a href="http://www.getmotopress.com/plugins/content-editor/">MotoPress Content Editor</a>. MotoPress Content Editor is a front-end page builder that enables users to visually construct pages. The front page of the site was a long vertical column filled with information that mimicked blog posts.</p>
<p>Because he didn&#8217;t understand how WordPress works, he forgot to configure the site to display the latest posts instead of using a front page. What he ended up doing is recreating the blog post layout on the static front page using the MotoPress Content Editor. He also added a lot of page builder elements such as YouTube videos to the page which was a contributing factor to the site&#8217;s poor loading times.</p>
<p>Page builders are a tool that can make building sites and pages more convenient, but in the wrong hands, they can help users <a href="https://wptavern.com/wordpress-visual-page-and-website-builders-make-it-easy-to-create-ugly-sites">ruin their sites</a>. I replaced the video elements with a text widget that displays the latest video from a YouTube channel. Since he was mimicking the blog post layout on a static page, I configured the site to display the latest blog posts first.</p>
<p>Once I fixed these issues, I removed the page builder and explained to my friend why it was unnecessary. He was recreating WordPress functionality and doing unnecessary work without realizing it.</p>
<p>This experience makes me wonder how many other newer WordPress users end up in a similar situation. They don&#8217;t know what WordPress is capable of out-of-the-box and they end up installing a myriad of plugins with descriptions that sound similar to the features they want. I spent about a week undoing all of the work my friend did in three. Had I not stepped in, the site would likely not scale and its performance would decrease further.</p>
<h2>Getting New Users Started on the Right Track</h2>
<p>In early 2015, a community initiative dubbed <a href="https://make.wordpress.org/core/2015/02/05/4-2-community-initiative-nux-working-group/">NUX Working Group</a> was created to brainstorm ideas on how to improve the new user experiences throughout the WordPress admin. While the group initially had a head of steam, it lost a lot of momentum last year. I&#8217;d like to see it re-emerge and work in concert with the <a href="https://wptavern.com/matt-mullenweg-announces-tech-and-design-leads-for-new-focus-based-development-cycle">focus-based approach</a> to developing WordPress this year.</p>
<p>How can WordPress explain to new users what its capable of without drowning them in technical information? Is it feasible to create something that caters to the majority without explaining every feature in detail? <a href="https://codex.wordpress.org/Version_3.3">Admin Pointers</a> were introduced in WordPress 3.3 and while they&#8217;re typically used to introduce new features in a release, they don&#8217;t act as a guided tour to what WordPress can do.</p>
<p>Education is likely a key component to improving the new user experience. WordPress.com has a <a href="https://learn.wordpress.com/get-started/">12-step beginner&#8217;s guide</a> that walks people through the process of configuring and customizing their sites. For self-hosted WordPress users, there&#8217;s a <a href="https://codex.wordpress.org/New_To_WordPress_-_Where_to_Start">New to WordPress &#8211; Where to Start guide</a> that covers what WordPress is, choosing a host, and considerations to keep in mind. However, much of the information is technical in nature.</p>
<p>If you&#8217;re a consultant or coach who works with people new to WordPress, how do you handle the educational part of your projects? What are the most common roadblocks that they encounter? Do you have a custom-made getting started guide or do you forward them to a site with video tutorials like <a href="https://wordpress.tv/">WordPress.TV</a> or <a href="https://www.wp101.com/">WP101</a>?</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 06 Jan 2017 19:19:33 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:47:"WPTavern: Incubator WordCamp Denpasar a Success";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64903";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wptavern.com/incubator-wordcamp-denpasar-a-success";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4625:"<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2017/01/taylor-lovett.jpg?ssl=1"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2017/01/taylor-lovett.jpg?resize=150%2C150&ssl=1" alt="" class="alignright size-thumbnail wp-image-64907" /></a>This post was contributed by guest author Taylor Lovett. Lovett is based in the Washington DC area, is the Director of Web Engineering at <a href="https://10up.com" target="_blank">10up</a>, creator of ElasticPress, and general open source enthusiast.<br />
&nbsp;</p>
<hr />
<p>In February 2016, the <a href="http://wordpressfoundation.org/" target="_blank">WordPress Foundation</a> announced the <a href="https://wordpress.org/news/2016/02/experiment-wordcamp-incubator/" target="_blank">WordCamp incubator program</a>, focused on spreading WordPress and open source values to remote areas of the world through extra hands-on support to first time WordCamps. WordCamp Denpasar, which took place in Bali’s capital city, is the first of three camps to be supported as a part of the program — other WordCamps include Harare and Medellín. As Director of Web Engineering at <a href="https://10up.com" target="_blank">10up</a>, I was sent to attend and speak at the inaugural event. Our company values open source projects and the WordPress community, so we’re proud to support emerging communities by attending events like this.</p>
<p>The incubator program supports WordCamps by providing them with an experienced organizer. In Denpasar’s case, Rocio Valdivia, a Community Wrangler for Automattic, was the WordCamp Incubator sponsored organizer. According to Ivan Kristianto, the lead organizer for WordCamp Denpasar, “Rocio was a hands-on consultant provided by the WordPress Foundation to help incubate the camp. She helped [us] in budgeting, managing the organizers, submission timelines, and more”.</p>
<p>WordCamp Denpasar attracted 180 attendees, twice the initial goal. Many attendees came from other parts of Indonesia to attend the Camp, which bubbled with an aura of excitement as Indonesia has not had a WordCamp in over three years. The venue, the <a href="http://www.sofitel.com/gb/hotel-5551-the-royal-beach-seminyak-bali-mgallery-collection/index.shtml" target="_blank">Royal Beach Seminyak Hotel</a>, was of ample size and served the crowd well. There was a single session track, mixed with user, business, and developer topics. Lunch included a nice buffet featuring local Balinese cuisine. Overall, the WordCamp attendance, venue, and amenities were quite impressive.</p>
<p>The speaker lineup was diverse, with speakers from Indonesia, Australia, Europe, Japan, and the United States. Attendees were extremely enthusiastic throughout the sessions and actively engaged in questions. I was last to speak, presenting on <a href="https://10up.com/blog/2016/twenty-sixteen-react-nodeifywp/" target="_blank">NodeifyWP and Twenty Sixteen React</a>. WordCamp Denpasar was the debut presentation of our new isomorphic JavaScript framework. The crowd was extremely excited to hear my presentation and attendees were grateful 10up choose Bali as a first occasion to show the framework. After my talk, I received more questions than could fit in the allotted time slot.</p>
<p>In the weeks after the Camp, I talked with Rocio about the overall success of the event and Incubator program as a whole. Rocio believed the WordCamp went extremely well. She cited some key events that followed the inaugural camp:</p>
<ol>
<li>The local Indonesian meetup group has grown to more than 50 new members across different groups.</li>
<li>The existing WP Meetup Bekasi group in Indonesia has applied to join the Meetup chapter program.</li>
<li>The non-active WP Meetup of Jakarta has now two members interested in re-activating the group and have applied to join the chapter program. They are also interested in organizing WordCamp Jakarta 2017.</li>
<li>The WordPress Foundation has received an application for organizing WordCamp Ubud in 2017 (one hour from Denpasar) which is in pre-planning now.</li>
<li>A WP Indonesia Slack channel is being created to connect the whole community in the country.</li>
</ol>
<p>Clearly, WordCamp Denpasar has had a positive effect on the Indonesian WordPress community. As more areas of the world getting involved contributing to and using WordPress, the project’s internationalization and diversity improves. If Denpasar is any indication, expanding the incubator program to more areas of the world will have long-lasting benefits within the entire WordPress community.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 06 Jan 2017 18:59:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:94:"WPTavern: Matt Mullenweg Announces Tech and Design Leads for New Focus-Based Development Cycle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64862";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:105:"https://wptavern.com/matt-mullenweg-announces-tech-and-design-leads-for-new-focus-based-development-cycle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7237:"<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2017/01/sharpened-pencil.jpg?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2017/01/sharpened-pencil.jpg?resize=960%2C542&ssl=1" alt="" class="size-full wp-image-64886" /></a>photo credit: <a href="https://stocksnap.io/photo/JLXDNN5BNE">Angelina Litvin</a>
<p>WordPress core development is kicking off in 2017 with the new focus-based development process that Matt Mullenweg announced during the <a href="https://wptavern.com/state-of-the-word-2016-mullenweg-pushes-calypso-as-future-of-wordpress-interface-proposes-major-changes-to-release-cycle" target="_blank">2016 State of the Word</a>. The new approach to releases shifts WordPress from the familiar time-based release cycle to one that is more project-based. The idea is that design and user testing will lead the way and upcoming releases will ship when significant user-facing improvements are ready.</p>
<p>Mullenweg, who will serve as the overall product lead for 2017, <a href="https://make.wordpress.org/core/2017/01/04/focus-tech-and-design-leads/" target="_blank">announced</a> tech and design leads for each of the three focus areas: the REST API, the editor, and the customizer.</p>
<p>&#8220;For the REST API we’re going to work on getting first party wp-admin usage of the new endpoints, and hopefully replace all of the core places where we still use admin-ajax,&#8221; Mullenweg said. The REST API team nominated Ryan McCue and K.Adam White to take the lead on the objectives Mullenweg outlined, as well as infrastructure and endpoint performance, security, and improvements to authentication options and documentation.</p>
<p>&#8220;The editor will endeavor to create a new page and post building experience that makes writing rich posts effortless, and has &#8216;blocks&#8217; to make it easy what today might take shortcodes, custom HTML, or &#8216;mystery meat&#8217; embed discovery,&#8221; Mullenweg said. Automattic employees Matias Ventura and Joen Asmussen will be taking point on the editor.</p>
<p>The <a href="https://wordpress.org/plugins/shortcode-ui/" target="_blank">Shortcake UI</a> feature plugin is one attempt at giving the existing shortcodes feature a more user-friendly interface, but contributors are also exploring other ideas for simplifying the experience of adding rich content to posts. Ella Van Dorpe recently posted an idea for <a href="https://make.wordpress.org/core/2016/12/24/idea-uniform-resource-identifiers-as-an-alternative-to-shortcodes/" target="_blank">using uniform resource identifiers as an alternative to shortcodes</a> in certain use cases. This would work similar to <a href="https://codex.wordpress.org/Embeds" target="_blank">WordPress&#8217; implementation of oEmbed</a> where data is stored elsewhere and embedded in a post using a URL.</p>
<p>Mullenweg&#8217;s proposed direction for the customizer team is to &#8220;help out the editor at first, then shift to bring those fundamental building blocks into something that could allow customization &#8216;outside of the box&#8217; of post_content, including sidebars and possibly even an entire theme.&#8221; Weston Ruter and Mel Choyce will be taking the lead on the customizer focus.</p>
<p>Ruter and contributors have been working on a project called <a href="https://github.com/xwp/wp-js-widgets" target="_blank">JS Widgets</a> that uses the Customize API to power the next generation of JavaScript-widgets in core. It opens the door for managing widgets via the REST API and ties in nicely with all three focus areas.</p>
<p>A preliminary discussion on upcoming Customizer priorities cropped up in the comments. Nick Halsey, co-maintainer of the customize component, <a href="https://make.wordpress.org/core/2017/01/04/focus-tech-and-design-leads/#comment-31891" target="_blank">responded</a> to the proposal of having the customizer help out the editor at first. He believes the best approach is to create the new editor within the Customize API, giving it live previews from the start.</p>
<p>&#8220;Improving the editor within an &#8216;admin&#8217; interface that lacks live preview doesn’t address the fundamental problems with the current content editing experience and creates something that still has to be entirely rebuilt and reimagined within a live preview context eventually,&#8221; Halsey said. &#8220;If the editor is built on the Customize API first, rather than rethinking the editor and then bringing it into the live preview API, the customize and editor contributors would be able to join forces to focus on improving the content editing experience much more effectively.&#8221;</p>
<p>It will be interesting to see what direction Mullenweg and the leads decide to take in the foundational task of architecting the new editing experience. Mullenweg made it clear in the State of the Word address that he would like to see Calypso or a similar interface replace wp-admin in the future. However, Calypso was not built using the Customize API, WordPress&#8217; own single page application admin interface that plugins and themes already widely support.</p>
<p>After WordCamp US, I asked Mullenweg about his intentions for Calypso in relationship to WordPress core. He said the application was &#8220;designed to be in core someday,&#8221; which is one reason they selected the same license and made it open source.</p>
<p>&#8220;My real hope is that it is something that is ready for core someday &#8211; both Calypso the interface and the concept.&#8221; Mullenweg said. &#8220;That&#8217;s why I said Calypso or something like it. There&#8217;s obviously a lot of WordPress.com stuff in Calypso that will never be in core. If we think of a wp-admin replacement, it would be replacing wp-admin with the parts that Calypso does that are the same thing, kind of more of the my sites section of it. But I do believe the future of a great wp-admin experience is JavaScript &#8211; probably React, talking to APIs, super fast, and maybe even working offline.&#8221;</p>
<p>Automattic is actively recruiting popular plugin authors to make their plugins Calypso-aware. Demonstrating the application&#8217;s interoperability with the WordPress plugin ecosystem is a must before Calypso can be considered a promising replacement for the WordPress admin. In the meantime, the foundation for a new page and post building experience is being laid with consideration for how the customizer can improve the editor.</p>
<p>Mullenweg responded to comments on the post indicating that feature plugins or other improvements to WordPress outside of the three focus areas would need to continue on as plugins for the time being. However, performance improvements may be included in minor releases.</p>
<p>&#8220;What goes in a minor release will broaden a bit, which I know is something we have to approach carefully, but performance is very important and improvements will be something I will consider for being in a minor release,&#8221; Mullenweg said. Contributors are currently working on <a href="https://make.wordpress.org/core/tag/4-7-1/" target="_blank">WordPress 4.7.1</a>, which is planned for release on Tuesday, January 10.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 06 Jan 2017 00:00:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:116:"WPTavern: Micro.blog Surpasses Kickstarter Funding Goal, Set to Launch New Social Network for Independent Microblogs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64805";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:126:"https://wptavern.com/micro-blog-surpasses-kickstarter-funding-goal-set-to-launch-new-social-network-for-independent-microblogs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6754:"<p>Developer <a href="http://www.manton.org/" target="_blank">Manton Reece</a> is on a mission to take back short form content for the open web by providing better tools for independent microblogging. Most short form content today is posted through centralized social networking sites like Facebook, Twitter, and Instagram, where posts are mixed with promoted content and users have no control of their timelines. There&#8217;s no guarantee that these social networks will be around forever, as many before them have disappeared, eclipsed by new ways to connect online.</p>
<p>Reece set out to create <a href="http://micro.blog/" target="_blank">Micro.blog</a>, a timeline and publishing platform for the open web, as an alternative social network that encourages more independent writing. He <a href="https://www.kickstarter.com/projects/manton/indie-microblogging-owning-your-short-form-writing" target="_blank">launched a Kickstarter campaign</a> to fund the platform along with his work on a book called Indie Microblogging. The project&#8217;s $10K goal was fully funded on the first day and has passed $22,000 on the second day of the campaign.</p>
<p>Micro.blog has a timeline experience similar to Twitter with replies and favorites, but the main difference is that it is based on RSS, pulling posts from independent sites. Those who don&#8217;t have their own websites will be able to opt for a hosted microblog and map a custom domain. Users with hosted microblogs can post via a web interface that includes a Markdown editor or use the service&#8217;s iPhone app.</p>
<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2017/01/micro-blog-1.png?ssl=1"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2017/01/micro-blog-1.png?resize=1025%2C590&ssl=1" alt="" class="aligncenter size-full wp-image-64853" /></a></p>
<h3>Micro.blog Will Integrate with WordPress</h3>
<p>Reece, who self-hosts <a href="http://manton.org/" target="_blank">his own blog</a> on WordPress, will be launching Micro.blog with full integration for WordPress users, making it easy to cross post between the two platforms. I asked him about the workflow for publishing from WordPress and he said his Indie Microblogging book will contain a section specifically on WordPress.</p>
<p>&#8220;After you&#8217;ve told Micro.blog about your WordPress RSS feed, you can continue to post to your blog as you normally would, although I&#8217;ll have some tips for taking the best advantage of it,&#8221; Reece said. &#8220;There&#8217;s also a native iPhone app for Micro.blog that supports direct posting to WordPress. I&#8217;ve found that it really improves the user experience to have a single app with a timeline experience, replies, favorites, as well as easy posting directly to your own site. But there&#8217;s no requirement to use any specific app.&#8221;</p>
<p>Reece said he plans to implement a very strict, reverse-chronological timeline for content that users are following. He also does not plan to introduce any algorithms or advertising. Basic accounts will be free and the plan is to sustain the platform with revenue from a paid plan that includes extra features like microblog hosting.</p>
<p>&#8220;One thing that is very important to me is not letting someone you don&#8217;t follow interrupt your timeline with harassment or other replies that aren&#8217;t appropriate,&#8221; Reece said. &#8220;I&#8217;m working on some features around this that I hope will help avoid similar issues that Twitter has faced in its community, for example. So if there are any custom algorithms or curation it will be around trying to deal with abuse before it happens.&#8221;</p>
<p>The Micro.blog platform is currently built using Ruby, Sinatra, Ember.js, MySQL, and Redis. Reece said he is in the process of rewriting some of the app with a more traditional Ruby on Rails setup.</p>
<p>&#8220;Ember didn&#8217;t end up being a great fit for the design,&#8221; Reece said. &#8220;There is also a portion of the microblog publishing engine built on Jekyll, so that themes and data files can be more portable.&#8221;</p>
<p>Micro.blog isn&#8217;t entirely distributed where users host their own &#8220;pods&#8221; like Diaspora, but Reece said he is open to making it more decentralized in the future.</p>
<p>&#8220;It&#8217;s a good goal to eventually move to something even more distributed, but it introduces a lot of complexity, which has prevented most of those kind of solutions from taking off,&#8221; Reece said. &#8220;I hope that Micro.blog is a step in the right direction, encouraging people to write more on their own site even for short microblog posts, instead of just Twitter and Facebook, with more open formats and APIs. It&#8217;s more achievable if we can build off of tools like WordPress instead of starting over.&#8221;</p>
<p>Reece said he thinks WordPress.com (Automattic) is one of only a couple web publishing companies he believes could last 100 years. &#8220;Only 2 companies keep coming to mind: WordPress.com and GitHub,&#8221; he said in a <a href="http://mirror.manton.org/2015/09/complete-mirror-of-this-blog.html" target="_blank">post about mirroring his blog to GitHub</a>. &#8220;I believe both will last for decades, maybe even 100 years, and both embrace the open web in a way that most other centralized web sites do not.&#8221;</p>
<p>During his 14 years of blogging and 10 years of using Twitter, Reece became an advocate for the open web. He said he used to be excited about Twitter and built apps for the platform but grew disillusioned at their approach to locking down the API.</p>
<p>&#8220;We&#8217;ve been so focused on writing on Twitter and Facebook that we&#8217;ve gotten away from more independent publishing that makes blogs and the open web great,&#8221; Reece said. &#8220;I think microblogging has a place on the open web, and that posting to a blog and reading posts from friends can have just as great a user experience as using a traditional social network. I&#8217;ve already heard from many people who have been inspired recently to blog again, which is really the main goal of Micro.blog.&#8221;</p>
<p>The <a href="https://www.kickstarter.com/projects/manton/indie-microblogging-owning-your-short-form-writing/community" target="_blank">Micro.blog Kickstarter campaign</a> will end in 27 days. Reece said he was surprised the project was funded so quickly. He plans to work hard over the next month to roll out Micro.blog to everyone.</p>
<p>&#8220;I can&#8217;t wait to see how users use the service, how the book can help WordPress users expand their existing blogs, and what developers want to build on the APIs going forward,&#8221; Reece said.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 04 Jan 2017 23:14:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:26:"HeroPress: We Are The Same";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/?post_type=heropress-essays&p=1556";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:45:"https://heropress.com/essays/we-are-the-same/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:9064:"<img width="960" height="480" src="http://20094-presscdn.pagely.netdna-cdn.com/wp-content/uploads/2017/01/010417-1024x512.jpg" class="attachment-large size-large wp-post-image" alt="Pull Quote: To every woman... we are the same. I am you and you are me." /><p><em>Topher asked me to write an article for HeroPress as we sat together in an alcove in the Philly Convention Center. I was in a vulnerable space. My lightning talk at WordCamp US had concluded, and I was settling into the experience of being at another WordCamp. I thought about the life experiences that brought me to my second presentation a year later, and I started to cry. Below is why.</em></p>
<p>One of my earliest memories is attending my mother&#8217;s graduate school graduation ceremony. It was a huge achievement. I wore a pink frilly dress with afro puffs to her graduation ceremony. I am sure I was gripping someone&#8217;s leg and hiding behind them. Behind my mother, my aunt or maybe my father. I was painfully awkward and shy. Which didn&#8217;t make any sense because my family was constantly telling me, &#8216;Be quiet&#8217;. That could have been their anthem for me. Children were meant to be seen, not heard.</p>
<blockquote><p>I think of that young Sierra Leonean American girl I was, I think back to that day, and wonder what became of her.</p></blockquote>
<p>She grew taller, much taller, transitioned from pink dresses to a pink bedroom, and, some say, is poised. But she is still painfully awkward. You wouldn&#8217;t know it, but you can catch her at times sitting quietly at an event achingly wishing she were alone and didn’t have to perform.</p>
<p>I project confidence because I was drafted into an oratory competition in middle school. Something about my voice caught the attention of my middle school teacher Mrs. McNeil. She entered me into one. I don&#8217;t recall what I read or the outcome. I only remember my mom driving me to my competition and her, my sister and I pulling up to a very crowded parking lot. Everything gets fuzzy after we arrived.</p>
<p>In high school, I didn&#8217;t need to be drafted into public speaking. I had strong ideals and opinions, and when it came to debate competitions I didn&#8217;t need to fit in and be cool. All I had to do was win. I debated as a Junior Statesmen, entered the Essex County Mock Trial competition, and the High School Moot Court Tournament at Princeton University. During 10th or 11th grade I got commendations for my role as a mother whose son died due to someone&#8217;s negligence at school. I argued with the other team’s attorneys. I was distraught. I channeled my inner mother. The judge gave our Mock Trial team extra points because I made the case believable. In 11th grade my partner and I came second place in the Moot Court competition at Princeton.</p>
<p>I live in Maplewood, New Jersey. It is a town that actively engages its children. Our administration and teachers educate us to be competitive academically and in our extracurricular activities, and to actively seek out opportunities for service.</p>
<blockquote><p>Teachers tell us we can be great &#8211; and expectations are that we will be great.</p></blockquote>
<p>It is ingrained in us that to whom much is given much is expected. I do the best I can to embody what is expected of me.</p>
<p>Truthfully, as an African girl, it was wonderful to be educated like this. At home my parents, aunts and uncles expect nothing less. Outside of home and my classes and clubs, I received mixed messages about who I was and what I could achieve. I was one of a handful of Africans in a diverse community. I didn&#8217;t look African or sound African I was told growing up. And I was surprised as a child of how differently I was treated by many of the same color other than my best friend and her family in elementary school. It was fascinating. On one occasion at school I achingly experienced different treatment. A college counselor lost interest in helping me with financial aid when it came up in conversation that I was African. After that conversation she was too busy to meet with me. I went to the head of guidance instead who was fabulous.</p>
<blockquote><p>Occasions like this make me acutely proud of where my family comes from and the sacrifices my parents made 30 plus years ago when they immigrated here.</p></blockquote>
<p>I see in them that resilience is a must and that success is accessible through motivation, hard work, focus, education and self-improvement.</p>
<p>As a child, I hurt at the barriers some put up when I told them I am African. And I still do. At times, we are misunderstood and misrepresented. And it doesn&#8217;t make me any less proud of my Sierra Leonean heritage.</p>
<p>Three weeks ago, I had dinner with someone I met years ago. I mentioned something related to my heritage. She stopped for a second. She said she was surprised to hear I am African. Her enthusiasm towards me immediately drained. I wasn&#8217;t shocked. I pushed away the feeling of disappointment I feel in these occasions. I acknowledged the difference internally and it didn&#8217;t stop me from enjoying her company. It&#8217;s a situation I&#8217;ve found myself in many, many times.</p>
<p>I was told I could be great as a child growing up in Maplewood. I let this propel me forward through each obstacle in my way, and I let this make me stand tall as I take on each daunting task before me. I took this with me to every college class and graduate class I have taken even when overpowered by feelings of inadequacy. I have been to events at places where very few people will ever have the chance to go. There are organizations I have worked for that have a competitive selection process. There are certificates I have earned that make me wonder how I gathered the strength to make it through. And there are presentations like the ones I gave at WordCamp US in 2015 and 2016 where I fought through feelings of inadequacy to stand on stage and speak before hundreds of people in the tech industry.</p>
<blockquote><p>At these times, I think of the little Sierra Leonean American girl in the pink frilly dress with afro puffs, and wonder how she could achieve each one of these accomplishments.</p></blockquote>
<p>I wonder how she became so warmly embraced by the WordPress community, invited to plan WordCamp NYC at the United Nations in 2016, and invited to be a co-organizer of Meetups in NYC. It reflects how inclusive our community is.</p>
<p>I think of my gender, my color, and my heritage.</p>
<p>To every woman &#8211; we are the same. And, even if we glance at each other and look away, I am you and you are me. We can’t let anyone convince us otherwise.</p>
<blockquote><p>I think of the African girl on the continent who doesn’t have the choices and resources I have. I cry for her, and I cry for me.</p></blockquote>
<p>I cry because I may never meet her, never look deeply into her eyes, never tell her that she will be great, give her the resources she needs to fully realize her dreams and give her the space to be embraced by the WordPress community. Make no mistake in this digital age that this little girl is aware of what she doesn’t have, and that she needs us to propel her forward.</p>
<div class="rtsocial-container rtsocial-container-align-right rtsocial-horizontal"><div class="rtsocial-twitter-horizontal"><div class="rtsocial-twitter-horizontal-button"><a title="Tweet: We Are The Same" class="rtsocial-twitter-button" href="https://twitter.com/share?text=We%20Are%20The%20Same&via=heropress&url=https%3A%2F%2Fheropress.com%2Fessays%2Fwe-are-the-same%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-fb-horizontal fb-light"><div class="rtsocial-fb-horizontal-button"><a title="Like: We Are The Same" class="rtsocial-fb-button rtsocial-fb-like-light" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fheropress.com%2Fessays%2Fwe-are-the-same%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-linkedin-horizontal"><div class="rtsocial-linkedin-horizontal-button"><a class="rtsocial-linkedin-button" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fheropress.com%2Fessays%2Fwe-are-the-same%2F&title=We+Are+The+Same" rel="nofollow" target="_blank" title="Share: We Are The Same"></a></div></div><div class="rtsocial-pinterest-horizontal"><div class="rtsocial-pinterest-horizontal-button"><a class="rtsocial-pinterest-button" href="https://pinterest.com/pin/create/button/?url=https://heropress.com/essays/we-are-the-same/&media=https://heropress.com/wp-content/uploads/2017/01/010417-150x150.jpg&description=We Are The Same" rel="nofollow" target="_blank" title="Pin: We Are The Same"></a></div></div><a rel="nofollow" class="perma-link" href="https://heropress.com/essays/we-are-the-same/" title="We Are The Same"></a></div><p>The post <a rel="nofollow" href="https://heropress.com/essays/we-are-the-same/">We Are The Same</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 04 Jan 2017 12:00:25 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Winstina Hughes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:68:"WPTavern: W3Techs Ranks WordPress as the Fastest Growing CMS of 2016";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64826";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:79:"https://wptavern.com/w3techs-ranks-wordpress-as-the-fastest-growing-cms-of-2016";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3019:"<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/05/blogging.jpg?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/05/blogging.jpg?resize=960%2C521&ssl=1" alt="" class="size-full wp-image-54799" /></a>photo credit: <a href="https://stocksnap.io/photo/3ZHG0XOIT6">Luis Llerena</a>
<p>W3Techs published its <a href="https://w3techs.com/blog/entry/web_technologies_of_the_year_2016" target="_blank">Web Technologies of 2016</a> report today, compiling technologies that saw the largest increase in usage last year. The survey pulls data from the top 10 million sites (according to Alexa rankings) and compares the number of sites for each technology by measuring the difference from January 1, 2016 to January 1, 2017.</p>
<p>W3Techs ranks WordPress as the fastest growing content management system with 58.5% market share. Shopify and Squarespace demonstrated the second and third largest increases in usage. Squarespace is a newcomer to the top three. In <a href="https://w3techs.com/blog/entry/web_technologies_of_the_year_2015" target="_blank">2015</a> the second and third place winners were Drupal and Shopify. WordPress has dominated the top spot every year since 2010.</p>
<p>CMS usage on the whole saw a 3.3% increase. Of the top 15 CMS&#8217;s only six demonstrated growth, including the aforementioned top three, as well as Joomla, Drupal, and Bitrix, which showed nominal 0.1% increases in market share by the end of 2016. Blogger is on the decline, and the remaining CMS&#8217;s showed no increase or decrease.</p>
<p><a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2017/01/cms-usage-2016.png?ssl=1"><img src="https://i1.wp.com/wptavern.com/wp-content/uploads/2017/01/cms-usage-2016.png?resize=1025%2C444&ssl=1" alt="" class="aligncenter size-full wp-image-64832" /></a></p>
<p>PHP regained its top ranking among server-side programming languages as the fastest growing in 2016, a title which it temporarily lost to Java in 2015. W3Techs estimates PHP to be used by 82.4% of all websites for which it can detect a server-side programming language.</p>
<p>Another interesting result of the survey is that &#8220;WordPress Jetpack,&#8221; the stats module in Jetpack, ranks third among the fastest growing traffic analysis tools, trailing Google Analytics and Yandex.Metrika. Jetpack Stats has been on a slow upward trend, rising from 1.6% in 2011 to 4.5% in 2017. The top fastest growing players in this category have repeated several years in a row.</p>
<p>It&#8217;s important to note that many Jetpack stats users also use Google Analytics, but these numbers also give a rough idea of Jetpack usage increase, since it is one of the most popular modules in the plugin. According to W3Techs, <a href="https://w3techs.com/technologies/details/ta-wordpressstats/all/all" target="_blank">Jetpack Stats</a> is used by 6.9% of sites for which it can detect a traffic analysis tool, which it estimates as 4.5% of all websites.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 03 Jan 2017 23:03:25 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:52:"WPTavern: WP-CLI Gets Official WordPress.org Support";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64789";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:63:"https://wptavern.com/wp-cli-gets-official-wordpress-org-support";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5086:"<p>The WP-CLI open source project will be coming under the WordPress.org umbrella in 2017. After recent talks with Daniel Bachhuber, WP-CLI&#8217;s official maintainer, Matt Mullenweg <a href="https://make.wordpress.org/core/2016/12/28/supporting-the-future-of-wp-cli/" target="_blank">announced WordPress&#8217; support for the project</a>, calling it &#8220;one of the highest impact developments for WP in many years.&#8221; The wp-cli.org website will soon be migrated to WordPress.org and a <a href="https://make.wordpress.org/cli/" target="_blank">CLI Make site</a> with its own P2 is now available to contributors.</p>
<p>&#8220;As we head into 2017, I wanted to make sure that its future is certain for everyone who builds on it, and that the major contributors to the project, chiefly Daniel Bachhuber, are able to work on it even more in the coming year,&#8221; Mullenweg said. Now that the project is part of WordPress.org, Mullenweg said he will be leading a coalition of companies to &#8220;solidify their financial support&#8221; of <a href="http://wp-cli.org/blog/the-big-question.html" target="_blank">the existing fundraising effort</a> that Bachhuber launched in mid-December 2016.</p>
<p>The logistics of the new funding model haven&#8217;t yet been completely ironed out, but Bachhuber says <a href="https://runcommand.io/" target="_blank">runcommand</a> will not be shutting down.</p>
<p>&#8220;Runcommand&#8217;s sole focus will be to hire people to work on WP-CLI,&#8221; he said. &#8220;This hybrid approach better ensures WP-CLI&#8217;s long-term future (e.g. the project is under the wing of the WordPress project), while also being a creative way for paying for dedicated resources to it.&#8221;</p>
<p>Bachhuber explored different funding models for WP CLI throughout 2016 without much success. When discussions about making it an official WordPress core project first began, he was leaning towards keeping WP-CLI operating as an independent project. The new hybrid approach gives companies the opportunity to financially support an official WordPress project via runcommand, where Bachhuber hopes to hire additional maintainers on a part-time basis.</p>
<p>&#8220;I&#8217;ve thought a lot about funding open source over the last year,&#8221; Bachhuber said. &#8220;In the context of WP-CLI, I came to the conclusion that I didn&#8217;t have confidence in WP-CLI being a completely independent project + financially sustainable business.&#8221;</p>
<p>Bachhuber said he feels &#8220;reasonably confident&#8221; about the future of the project after recent developments and hopes to have funding for a few part-time maintainers.</p>
<p>&#8220;I think part-time is key because each of us needs to be working / solving problems in the real-world, and then taking those solutions back to the project,&#8221; Bachhuber said. Although many open source projects operate without paying people for contributions, he believes there is an important distinction between maintainers and contributors.</p>
<p>&#8220;Contributors act in a voluntary manner (e.g. contributing code when they have a couple hours free),&#8221; Bachhuber said. &#8220;Maintainers take responsibility for the project, showing up every day, and doing most of the unglamorous work. I think maintainership is an important aspect of a healthy open source project. Everyone has an example of an open source project they use that&#8217;s no longer maintained and how painful it is to be dependent on it.&#8221;</p>
<p>Responses to the news of WP-CLI gaining official WordPress.org support were overwhelmingly positive, as the tool is critical to the WordPress developer community. The decision to have WP-CLI operate under WordPress.org&#8217;s umbrella makes it better positioned to drive the financial support needed to sustain the ongoing burden of maintainership.</p>
<p>Bachhuber said the current fundraising effort, which is <a href="https://wptavern.com/wp-cli-project-launches-patron-support-model-to-fund-ongoing-development" target="_blank">based on a patron support model</a>, is approximately 1/5 of the way to his funding goal. He is still waiting to hear from a number of large players but the funding drive will remain open indefinitely for now. Bachhuber said they will re-evaluate once they reach the goal.</p>
<p>&#8220;I consider this the best possible outcome of my efforts trying to identify sustainability for the project over the last year,&#8221; Bachhuber said in the <a href="https://make.wordpress.org/cli/2017/01/03/lets-do-this/" target="_blank">first post</a> on the Make WordPress CLI site. &#8220;The decision to make WP-CLI an official WordPress project also means there’s a clear path forward for me to invest more of my own time into the <a href="http://wp-cli.org/docs/roadmap/" target="_blank">WP-CLI roadmap</a>. Concurrent with the transition process over the next couple of months, I want to move forward the conversation of how we realize a future where WP-CLI is the fastest way to do anything with WordPress.&#8221;</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 03 Jan 2017 06:50:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:11:"





";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:34:"HeroPress: Help a HeroPress friend";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://heropress.com/?p=1553";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:44:"https://heropress.com/help-heropress-friend/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2334:"<p>Hey folks, HeroPress contributor Michael Beil is fighting for his life right now. Michael&#8217;s a personal friend, and a tremendous person. There&#8217;s an <a href="https://www.plumfund.com/financial-hardship/michael-john-beil">online donation form</a> to help with medical bills and life in general. If you can, please help out.</p>
<p><a href="https://heropress.com/essays/life-without-limits/">You can read Michael&#8217;s HeroPress essay here</a>.</p>
<div class="rtsocial-container rtsocial-container-align-right rtsocial-horizontal"><div class="rtsocial-twitter-horizontal"><div class="rtsocial-twitter-horizontal-button"><a title="Tweet: Help a HeroPress friend" class="rtsocial-twitter-button" href="https://twitter.com/share?text=Help%20a%20HeroPress%20friend&via=heropress&url=https%3A%2F%2Fheropress.com%2Fhelp-heropress-friend%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-fb-horizontal fb-light"><div class="rtsocial-fb-horizontal-button"><a title="Like: Help a HeroPress friend" class="rtsocial-fb-button rtsocial-fb-like-light" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fheropress.com%2Fhelp-heropress-friend%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-linkedin-horizontal"><div class="rtsocial-linkedin-horizontal-button"><a class="rtsocial-linkedin-button" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fheropress.com%2Fhelp-heropress-friend%2F&title=Help+a+HeroPress+friend" rel="nofollow" target="_blank" title="Share: Help a HeroPress friend"></a></div></div><div class="rtsocial-pinterest-horizontal"><div class="rtsocial-pinterest-horizontal-button"><a class="rtsocial-pinterest-button" href="https://pinterest.com/pin/create/button/?url=https://heropress.com/help-heropress-friend/&media=http://heropress.com/wp-content/plugins/rtsocial/images/default-pinterest.png&description=Help a HeroPress friend" rel="nofollow" target="_blank" title="Pin: Help a HeroPress friend"></a></div></div><a rel="nofollow" class="perma-link" href="https://heropress.com/help-heropress-friend/" title="Help a HeroPress friend"></a></div><p>The post <a rel="nofollow" href="https://heropress.com/help-heropress-friend/">Help a HeroPress friend</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 31 Dec 2016 01:20:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:61:"WPTavern: WPWeekly Episode 258 – 2016 Year in Review Part 1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wptavern.com?p=64794&preview=true&preview_id=64794";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"https://wptavern.com/wpweekly-episode-258-2016-year-in-review-part-1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1078:"<p>In this episode of WordPress Weekly, <a href="http://marcuscouch.com/">Marcus Couch</a> and I recap the news and headlines of the first half of 2016. Part two will be recorded on January 4th, 2017, where we&#8217;ll look back at the headlines during the second half of 2016, give our predictions for 2017, and share what we&#8217;re looking forward to in the new year.</p>
<h2>WPWeekly Meta:</h2>
<p><strong>Next Episode:</strong> Wednesday, January 4th 3:00 P.M. Eastern</p>
<p><strong>Subscribe To WPWeekly Via Itunes: </strong><a href="https://itunes.apple.com/us/podcast/wordpress-weekly/id694849738" target="_blank">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via RSS: </strong><a href="https://wptavern.com/feed/podcast" target="_blank">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via Stitcher Radio: </strong><a href="http://www.stitcher.com/podcast/wordpress-weekly-podcast?refid=stpr" target="_blank">Click here to subscribe</a></p>
<p><strong>Listen To Episode #258:</strong><br />
</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 29 Dec 2016 21:45:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:79:"Post Status: What we want from WordPress in 2017, live from Post Status Publish";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:31:"https://poststatus.com/?p=31717";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://poststatus.com/post-status-draft-live-at-publish/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1751:"<p>After Post Status Publish&#8217;s main talks concluded, Joe Hoyle and I recorded the podcast during the reception. It was a laid back format where we discuss the future of WordPress, including our own wishlist features, and then we spent the majority of the hour taking questions from the audience.</p>
<p>We recorded this prior to the announcement of the <a href="https://poststatus.com/matt-mullenweg-state-word-2016/">new development schedule</a> and changes to major releases, but most of our conversation remains relevant, as many of our wishlist items are within the three release focus areas that have been chosen.</p>
<p>You can listen to just the audio, also on our podcast, which you can find <a href="https://itunes.apple.com/us/podcast/post-status-draft-wordpress/id976403008">on iTunes</a>, <a href="https://play.google.com/music/m/Ih5egfxskgcec4qadr3f4zfpzzm?t=Post_Status__Draft_WordPress_Podcast">Google Play</a>, <a href="http://www.stitcher.com/podcast/krogsgard/post-status-draft-wordpress-podcast">Stitcher</a>, and <a href="http://simplecast.fm/podcasts/1061/rss">via RSS</a> for your favorite podcatcher.</p>
<!--[if lt IE 9]><script>document.createElement(\'audio\');</script><![endif]-->
<a href="https://audio.simplecast.com/56018.mp3">https://audio.simplecast.com/56018.mp3</a>
<p><a href="https://audio.simplecast.com/56018.mp3">Direct Download</a></p>
<p>Or just watch the <a href="https://youtu.be/Xoteb83jmD8">video on YouTube</a>, or below for the full experience. And don&#8217;t forget to subscribe to <a href="https://www.youtube.com/c/PostStatus">my new channel on YouTube</a>.</p>
<p></p>
<p>The rest of the videos from <a href="https://poststatus.com/publish">Publish</a> are available to Post Status members.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 29 Dec 2016 15:21:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Brian Krogsgard";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:28:"HeroPress: Over The Atlantic";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/?post_type=heropress-essays&p=1545";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:47:"https://heropress.com/essays/over-the-atlantic/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6054:"<img width="960" height="480" src="http://20094-presscdn.pagely.netdna-cdn.com/wp-content/uploads/2016/12/122816-1024x512.jpg" class="attachment-large size-large wp-post-image" alt="Pull Quote: I\'ve come to realise the WordPress community doesn\'t tolerate bad actors." /><p>I’m on a plane. They’ve just served lunch and I realise I’m stuck. There isn’t enough room to slip out for a bathroom break without tipping my meal and the trolley blocks the aisle.</p>
<p>I cough and notice I’m tense, what’s going on? I enjoy flying, why should today be any different? Is it that I might be sick? Maybe it’s shovelling clothes off of the dining table into an open suitcase and rushing for a taxi at 6am? Or responding to a client at 11pm then playing Rimworld till 2am knowing I’d be up at 5? Maybe it’s Mr Robot? Anyone who’s seen that show knows it isn’t exactly happy.</p>
<p>I open my watch up and try the new breathe app. I’ve installed watch apps before but never found much use from them, but this came with the update from Apple this morning so I’ll give it a go. It holds me steady but I’m still tense.</p>
<p>I put on some music and try to eat some food. Maybe that’s the problem? I get anxious sometimes about food, it can get me in trouble. During speaker submissions for WordCamp Europe Sophia I wrote a mini rant about sandwiches and labeling. Siobhan thought it was funny, but I should know better. It was that year I saw a talk on depression.</p>
<p>I’ve seen several people speak about it, but right now I’m anxious, and I’m typing. After WCEU 2016 I promised Topher I’d write an article for him, and I’ve been occupied. The last month or so, I’ve been working and not taking care of myself. I’m not sure if I&#8217;m actually sick or if this is burn out. I’ve noticed aches in my hands, it worries me.</p>
<p>I think about what writing this will do. My WP Tavern article ranks higher than me on Facebook search.</p>
<blockquote><p>There’s nothing like an article on anxiety popping up when a date searches your name. I don’t want to be known as the mental health guy.</p></blockquote>
<p>But a promise is a promise. When I last did this people were supportive. They said nice things, they talked about their own feelings and gave talks. Nobody sent their pity.</p>
<p>The food tray’s gone now, I’m not sure how I feel but I know there’s 2 Automatticians in front of me and 2 to the side. We land in Vancouver in 6 hours for the grand meet up, and I know I’ll get a big hug from several people. They’re genuine nice people, and I’ve come to realise the WordPress community doesn’t tolerate bad actors. We share what we think is important, what people need to hear.</p>
<p>I’ve got one more episode of Mr Robot, I’ll think about those I see at WordCamps and close this app. It isn’t long before I can talk in person.</p>
<hr />
<p>I’m home! Despite a total lack of scrambled eggs on toast in not one, not two, but three major international airports, I’ve finally returned home. My friends dragged me jet lagged to a play entitled “The pacifists answer to the war on cancer” where a jolly sequinned cancer cell sings a song moments after a woman screams in agony. I got to sing happy birthday to my family with a room of Automatticians, climb a mountain, it was fun!</p>
<p>I think about what I’ve written, and wish I’d been more positive.</p>
<blockquote><p>Life can be scary but I’m surrounded by people who want to help.</p></blockquote>
<p>Sometimes that’s family, or friends, but user groups and events help too. These people have the same problems and worries I do, and deal with them in many ways.</p>
<p>Importantly, they’re willing to talk about their problems in front of hundreds of people, and share their solutions. I feel it’s something that isn’t mentioned often enough. Burnout and stress is rampant in our industry, and I’m glad people are stepping up to the challenge.</p>
<p>I’m a lead organiser for a WordCamp Manchester now. That means I can’t speak at my own conference, but I’m hoping to get a good talk or two. Maybe things aren’t so terrible? Maybe next time I’ll get a window seat.</p>
<div class="rtsocial-container rtsocial-container-align-right rtsocial-horizontal"><div class="rtsocial-twitter-horizontal"><div class="rtsocial-twitter-horizontal-button"><a title="Tweet: Over The Atlantic" class="rtsocial-twitter-button" href="https://twitter.com/share?text=Over%20The%20Atlantic&via=heropress&url=https%3A%2F%2Fheropress.com%2Fessays%2Fover-the-atlantic%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-fb-horizontal fb-light"><div class="rtsocial-fb-horizontal-button"><a title="Like: Over The Atlantic" class="rtsocial-fb-button rtsocial-fb-like-light" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fheropress.com%2Fessays%2Fover-the-atlantic%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-linkedin-horizontal"><div class="rtsocial-linkedin-horizontal-button"><a class="rtsocial-linkedin-button" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fheropress.com%2Fessays%2Fover-the-atlantic%2F&title=Over+The+Atlantic" rel="nofollow" target="_blank" title="Share: Over The Atlantic"></a></div></div><div class="rtsocial-pinterest-horizontal"><div class="rtsocial-pinterest-horizontal-button"><a class="rtsocial-pinterest-button" href="https://pinterest.com/pin/create/button/?url=https://heropress.com/essays/over-the-atlantic/&media=https://heropress.com/wp-content/uploads/2016/12/122816-150x150.jpg&description=Over The Atlantic" rel="nofollow" target="_blank" title="Pin: Over The Atlantic"></a></div></div><a rel="nofollow" class="perma-link" href="https://heropress.com/essays/over-the-atlantic/" title="Over The Atlantic"></a></div><p>The post <a rel="nofollow" href="https://heropress.com/essays/over-the-atlantic/">Over The Atlantic</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 28 Dec 2016 12:00:55 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Tom Nowell";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:38:"Matt: Christmas Music: Leslie Odom Jr.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=47002";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://ma.tt/2016/12/christmas-music-leslie-odom-jr/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:629:"<p>I love Christmas music, and <a href="https://ma.tt/2013/12/christmas-jazz-music/">most years</a> I like to recommend a Christmas music album that is a bit more jazz or has something interesting about it. This year I want to point you to Leslie Odom Jr., aka Aaron Burr in the hit musical Hamilton, who is a gifted vocalist. <cite>Hat tip: Rose Kuo.</cite> Check out &#8220;My Favorite Things.&#8221; Embedded on Spotify below, also on <a href="https://itunes.apple.com/us/album/simply-christmas/id1170245823">iTunes</a> and <a href="https://www.amazon.com/Simply-Christmas-Leslie-Odom-Jr/dp/B01L22Y87K">Amazon</a>.</p>
<p></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 24 Dec 2016 18:18:35 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:98:"WPTavern: BuddyPress 2.7.4 Patches Security Vulnerability That Could Allow Arbitrary File Deletion";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wptavern.com?p=64736&preview=true&preview_id=64736";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:109:"https://wptavern.com/buddypress-2-7-4-patches-security-vulnerability-that-could-allow-arbitrary-file-deletion";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1223:"<p>The BuddyPress development team has <a href="https://buddypress.org/2016/12/buddypress-2-7-4-security-release/">released BuddyPress 2.7.4</a> to address a security vulnerability that affects all versions back to 2.0.</p>
<p>According to John James Jacoby, lead developer of BuddyPress, &#8220;This version patches a vulnerability to the BuddyPress core attachments API that could allow arbitrary file deletion on certain installation configurations.&#8221;</p>
<p>The vulnerability was responsibly disclosed by Sam Pizzey through the <a href="https://hackerone.com/automattic">HackerOne bounty program</a>. Although Automattic primarily uses the service for its own products, they accept reports for open source projects such as WordPress and BuddyPress.</p>
<p>Boone Gorges and Paul Gibbs collaborated on a fix for all affected versions of BuddyPress while Stephen Edgar and Dion helped package the release. Those who use BuddyPress are highly encouraged to update as soon as possible to protect against this vulnerability. If you encounter any issues or need help, please create a post on the project&#8217;s<a href="https://buddypress.org/support/"> support forums.</a></p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 23 Dec 2016 19:59:16 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:49:"BuddyPress: BuddyPress 2.7.4 – Security Release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://buddypress.org/?p=262326";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:65:"https://buddypress.org/2016/12/buddypress-2-7-4-security-release/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1235:"<p>BuddyPress 2.7.4 is now available, and is a security release &amp; recommended upgrade for all BuddyPress installations. We&#8217;ve also ported the code changes in 2.7.4 to all branches back 2.0, and are pushing updates out for all installations where we are able to do so.</p>
<p>These releases include a fix to the BuddyPress core attachments API that could allow arbitrary file deletion on certain installation configurations.</p>
<p>This bug was responsibly disclosed to the WordPress security team (and the BuddyPress team) through the WordPress HackerOne Bounty Program by Sam Pizzey (mopman).</p>
<p>Both Boone &amp; Paul worked together to fix this for all versions of BuddyPress that are currently in active use, and Stephen &amp; Dion helped package and push these releases out.</p>
<p>Please update to these latest versions of BuddyPress today in your WordPress Dashboard, or by <a href="https://wordpress.org/plugins/buddypress/">downloading from the wordpress.org plugin repository</a>.</p>
<p>Questions or comments? Check out the <a href="https://codex.buddypress.org/releases/version-2-7-4/">2.7.4 changelog</a>, or stop by our <a href="https://buddypress.org/support/">support forums</a> or  Trac.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 23 Dec 2016 02:25:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:17:"John James Jacoby";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:50:"WPTavern: WordPress.org Launches Homepage Redesign";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64708";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:61:"https://wptavern.com/wordpress-org-launches-homepage-redesign";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2790:"<p><a href="https://wordpress.org/" target="_blank">WordPress.org</a> made its new <a href="https://wptavern.com/the-wordpress-org-homepage-is-getting-a-redesign" target="_blank">homepage redesign</a> live today. The meta team worked quickly to put the new design in place in time for the holidays.</p>
<p>&#8220;While this is only the first iteration, the plan is to continue design and development to create something truly amazing,&#8221; Mark Uraine said in the <a href="https://make.wordpress.org/meta/2016/12/22/new-homepage-is-launched/" target="_blank">announcement</a>. &#8220;This is the first step toward that goal.&#8221;</p>
<p><a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/wordpress-homepage-new-design-e1482443742169.png?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/wordpress-homepage-new-design-e1482443742169.png?resize=1025%2C854&ssl=1" alt="" class="aligncenter size-full wp-image-64722" /></a></p>
<p>The header and footer have been kept from the previous design. According to meta team member Samuel Wood, matching them to the new design is beyond the scope of this first iteration.</p>
<p>&#8220;The header and footer are global pieces,&#8221; Wood said. &#8220;Redesigning them, in any way, will have to be part of a much larger effort in redesigning, well, everything. The entire site would need adjustments to adjust them.&#8221;</p>
<p>Uraine <a href="https://make.wordpress.org/meta/2016/12/12/new-homepage-redesign/#comment-8739" target="_blank">said</a> in a previous post that there are iterations underway for a new, more minimal header that better aligns with the new homepage style.</p>
<p>Feedback on the <a href="https://make.wordpress.org/meta/2016/12/12/new-homepage-redesign/" target="_blank">initial draft</a> included notes on the copy, particularly the &#8220;Meet WordPress&#8221; headline. One person commented on it not being inclusive of people who have already met WordPress and are returning. Also, a few found the tagline to be too narrow: <em>WordPress is open source software you can use to create a beautiful website, blog, or app.</em> Some suggested the inclusion of other use cases, such as store, forum, and membership site. These ideas have not been incorporated but they were recognized by the design team in the comments on the initial draft.</p>
<p>The homepage redesign went from sketches to prototype to live on WordPress.org in a matter of a couple weeks. Feedback has been overwhelmingly positive so far, and most see it as a huge improvement. The new design should receive a great deal more exposure now that it&#8217;s live, which will hopefully bring in more varied perspectives towards making it extraordinary in future iterations.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 22 Dec 2016 23:13:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:23:"Matt: New .org Homepage";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=46996";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:39:"https://ma.tt/2016/12/new-org-homepage/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:410:"<p>For the first time in&#8230; many years, <a href="https://wordpress.org/">WordPress.org has a new home page</a>. What&#8217;s on the page today actually isn&#8217;t that important, even though it&#8217;s better in many ways, the key is that it&#8217;s changing again, the stone has <a href="https://make.wordpress.org/meta/2016/12/22/new-homepage-is-launched/">been unstuck</a> and can now keep rolling.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 22 Dec 2016 22:10:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:79:"WPTavern: WPWeekly Episode 257 – My Side Project, WordPress 4.7, and the News";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wptavern.com?p=64711&preview=true&preview_id=64711";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:84:"https://wptavern.com/wpweekly-episode-257-my-side-project-wordpress-4-7-and-the-news";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3589:"<p>In this episode of WordPress Weekly, <a href="http://www.marcuscouch.com/">Marcus Couch</a> and I discuss the news of the week including, WooCommerce&#8217;s 42% market share, the redesign concept of WordPress.org, and two plugin acquisitions. I also share details of a side project I&#8217;m working on that involves BuddyPress. Last but not least, we briefly discuss <a href="https://twitter.com/kingjeff2">Jeff King&#8217;s</a> impact on GoDaddy as he&#8217;s leaving the company at the end of this year.</p>
<h2>Stories Discussed:</h2>
<p><a href="https://wptavern.com/wordpress-4-7-introduces-twenty-seventeen-default-theme-and-wp-rest-api-content-endpoints">WordPress 4.7 Introduces Twenty Seventeen Default Theme and WP REST API Content Endpoints</a><br />
<a href="https://wptavern.com/the-wordpress-org-homepage-is-getting-a-redesign">The WordPress.org Homepage is Getting a Redesign</a><br />
<a href="https://wptavern.com/woocommerce-powers-42-of-all-online-stores">WooCommerce Powers 42% of All Online Stores</a><br />
<a href="https://wptavern.com/podcast-motor-acquires-seriously-simple-podcasting-plugin">Podcast Motor Acquires Seriously Simple Podcasting Plugin</a><br />
<a href="https://wptavern.com/updraftplus-acquires-wp-optimize-will-be-integrated-into-updraftcentral">UpdraftPlus Acquires WP-Optimize, Will Be Integrated Into UpdraftCentral</a><br />
<a href="https://wptavern.com/wordpress-com-launches-vr-content-coming-soon-to-jetpack">WordPress.com Launches VR Content, Coming Soon to Jetpack</a></p>
<h2>Plugins Picked By Marcus:</h2>
<p><a href="https://wordpress.org/plugins/wp-youtube-live/">WP YouTube Live</a> displays a YouTube live video from a specified channel via shortcode. There are several shortcode options available that allow you to autoplay and change the video&#8217;s dimensions. There&#8217;s also an option to not display a video if there isn&#8217;t a live video taking place.</p>
<p><a href="https://wordpress.org/plugins/woo-floating-cart-lite/">Woo Floating Cart Lite</a> is an interactive floating cart for WooCommerce that slides into view when a user decides to buy an item. Products, quantities, and prices are updated instantly via AJAX. It&#8217;s similar to many of the professional carts you may have seen at the big retail stores where the cart is in view at all times.</p>
<p><a href="https://wordpress.org/plugins/import-facebook-events/">Import Facebook Events</a> allows you to import events from Facebook into <a href="https://wordpress.org/plugins/the-events-calendar/">The Events Calendar</a> and <a href="https://wordpress.org/plugins/events-manager/">Events Manager</a> plugins. If you are like me and use The Events Manager as your events plugin of choice, this plugin is a no-brainer as an extra add-on. As an add-on plugin this plugin needs The Events Calendar or Events Manager Installed and activated.</p>
<h2>WPWeekly Meta:</h2>
<p><strong>Next Episode:</strong> Wednesday, December 28th 3:00 P.M. Eastern</p>
<p><strong>Subscribe To WPWeekly Via Itunes: </strong><a href="https://itunes.apple.com/us/podcast/wordpress-weekly/id694849738" target="_blank">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via RSS: </strong><a href="https://wptavern.com/feed/podcast" target="_blank">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via Stitcher Radio: </strong><a href="http://www.stitcher.com/podcast/wordpress-weekly-podcast?refid=stpr" target="_blank">Click here to subscribe</a></p>
<p><strong>Listen To Episode #257:</strong><br />
</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 22 Dec 2016 21:20:54 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:75:"WPTavern: Nadia Eghbal Publishes Guide to Financial Support for Open Source";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64676";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:86:"https://wptavern.com/nadia-eghbal-publishes-guide-to-financial-support-for-open-source";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4614:"<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/lemonade-stand.jpg?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/lemonade-stand.jpg?resize=1024%2C577&ssl=1" alt="" class="size-full wp-image-64693" /></a>photo credit: rachaelvoorhees <a href="http://www.flickr.com/photos/17237319@N00/2521106411">A Young Entrepreneur on a Hot Day at Portland State</a> &#8211; <a href="https://creativecommons.org/licenses/by-sa/2.0/">(license)</a>
<p>If you want to make a living in the world of open source software, <a href="http://nadiaeghbal.com/" target="_blank">Nadia Eghbal</a> has created a <a href="https://github.com/nayafia/lemonade-stand#consulting--services" target="_blank">guide</a> that explores various models for funding your work. Eghbal, who has written extensively on <a href="http://nadiaeghbal.com/oss" target="_blank">sustainability and open source</a>, recently authored <a href="https://wptavern.com/ford-foundation-publishes-non-technical-white-paper-on-open-source-software-and-the-challenges-of-sustaining-digital-infrastructure" target="_blank">a white paper published by the Ford Foundation</a> called “Roads and Bridges: The Unseen Labor Behind Our Digital Infrastructure.” The whitepaper was written to help consumers and companies understand the challenges of sustaining open source software.</p>
<p>Eghbal published &#8220;A handy guide to financial support for open source&#8221; on GitHub so that others with experience can contribute to the reference. The repository is called &#8220;<a href="https://github.com/nayafia/lemonade-stand" target="_blank">lemonade stand</a>,&#8221; a term that references a common summertime business venture where children cut their teeth in entrepreneurship. The lemonade stand is often used as a symbol of capitalism, a new arena that many developers will need to embrace if they want to provide a sustainable future for their open source work.</p>
<p>Eghbal&#8217;s guide currently includes 16 different categories of funding, starting with the smallest (donations, bounties, crowdfunding) to the largest (foundations, consortiums, and venture capital). The funding categories explore pros, cons, and relevent case studies where the particular model has been explored.</p>
<p>&#8220;The purpose of this guide is to provide an exhaustive list of all the ways you can get paid, so that you can figure out what works best for you,&#8221; Eghbal said. It has already received additions from 12 contributors, including Daniel Bachhuber, who is currently <a href="https://wptavern.com/wp-cli-project-launches-patron-support-model-to-fund-ongoing-development" target="_blank">exploring a patron support model to fund his work on WP-CLI</a>.</p>
<p>With a few notable exceptions like Red Hat and Linux, open source projects suffer from a severe lack of funding, a problem which Eghbal calls &#8220;<a href="https://medium.com/@nayafia/how-i-stumbled-upon-the-internet-s-biggest-blind-spot-b9aa23618c58#.6efp8nk2c" target="_blank">the internet&#8217;s biggest blind spot</a>.&#8221; She notes that the problem of funding digital infrastructure is relatively new but is accelerating as more people are using open source software but ignoring the developer tools everyone relies on.</p>
<p>WP-CLI is a prime example in the WordPress community. Developers who use it are more inclined to send sporadic donations than become personally invested in maintaining the code base, which has led Bachhuber to test different funding models throughout 2016. There have been <a href="https://twitter.com/dd32/status/807435845724577792" target="_blank">discussions</a> about making it an official WordPress core project with the goal of widening the contributor base and ensuring its longterm future. However, Bachhuber <a href="https://twitter.com/danielbachhuber/status/806563582968115201" target="_blank">said</a> he &#8220;strongly believes WP-CLI should be an independent project.&#8221;</p>
<p>Eghbal&#8217;s funding <a href="https://github.com/nayafia/lemonade-stand" target="_blank">guide</a> is an important document for open source software maintainers who are struggling to fund their efforts and looking for more options beyond sticking a simple download button on the project&#8217;s website. If you&#8217;re looking for more discussion on this topic, Eghbal co-produces a podcast called <a href="https://changelog.com/rfc/archive" target="_blank">Request for Commits</a> that explores open source&#8217;s complicated relationship with money and various sustainability models.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 22 Dec 2016 20:00:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:78:"WPTavern: Wallace: A Free WordPress Theme Built on the WP REST API and Angular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64652";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:88:"https://wptavern.com/wallace-a-free-wordpress-theme-built-on-the-wp-rest-api-and-angular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4819:"<p><a href="https://twitter.com/Bradley_Kirby" target="_blank">Bradley Kirby</a> released version 1.0 of his <a href="https://wallacetheme.com/" target="_blank">Wallace WordPress theme</a> today. The theme is built using the WP REST API and <a href="https://angular.io/" target="_blank">Angular 2</a>. Kirby has been working on Wallace for the past two years and has rewritten it several times in order to keep pace with changes in the REST API and Angular.</p>
<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/wallace-theme.png?ssl=1"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/wallace-theme.png?resize=1025%2C925&ssl=1" alt="" class="aligncenter size-full wp-image-64661" /></a></p>
<p>If you view the <a href="https://demo.wallacetheme.com/" target="_blank">Wallace demo</a>, you&#8217;ll notice that the theme is super fast because the interface is rendered on the client side with JavaScript.</p>
<p>&#8220;It really opens a whole new world of possibility for WordPress themes,&#8221; Kirby said. &#8220;For this release I&#8217;ve primarily focused on smooth page transitions. That&#8217;s just not possible with the traditional server-rendered themes. But I think there&#8217;s a lot of really cool customization techniques that the API allows for, too. That&#8217;s what I&#8217;m hoping to explore next.&#8221;</p>
<p>Although React has emerged as <a href="https://wptavern.com/state-of-javascript-survey-results-published-react-emerges-as-clear-winner-in-front-end-frameworks" target="_blank">the most popular JavaScript framework for front-end development</a> in 2016, Kirby said he chose Angular mostly because he learned it first.</p>
<p>&#8220;I really like the prescriptive nature of Angular,&#8221; Kirby said. &#8220;There&#8217;s a &#8216;right&#8217; way to do things that you&#8217;ll find in example projects and all the functionality comes with the framework itself. With React you have to use a collection of third-party libraries with various maintainers. With Angular, it&#8217;s all Google, and all one repository. I think React is a perfectly fine framework, and they actually share a lot of concepts.&#8221;</p>
<p>Wallace currently only supports posts, but Kirby plans to implement more core WordPress features, including pages, comments, searching, and category filtering. He said those features shouldn&#8217;t be too difficult to implement now that the frame is there.</p>
<p><a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/wallace-posts.png?ssl=1"><img src="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/wallace-posts.png?resize=500%2C494&ssl=1" alt="" class="aligncenter size-large wp-image-64669" /></a></p>
<p>&#8220;From a programming perspective, this was way more difficult to create than a PHP-rendered theme, because you get so much &#8216;for free&#8217; with the PHP theming API that you don&#8217;t get when you&#8217;re just making raw requests to the REST API,&#8221; Kirby said. The primary advantage of theming with the API is more instantaneous interactions with the content, but creating API-driven themes is not yet as easy as the old way of theming.</p>
<p>Kirby said he is actively exploring the idea of submitting Wallace to WordPress.org, but the Theme Review Team does not permit the use of Twig templates.</p>
<p>&#8220;I&#8217;ve brought it up with the team that approves themes, and they didn&#8217;t like that I was using the Twig templating library on the PHP side,&#8221; Kirby said. &#8220;So I&#8217;d have to maintain two versions of the theme if I were to submit it to the directory.&#8221; Kirby hasn&#8217;t ruled it out yet and said he will probably revisit the idea next year.</p>
<p>&#8220;Twig templates mirror Angular templates really nicely,&#8221; Kirby said. &#8220;It cuts down on the maintenance burden quite a bit, because I have to exactly mirror the templates on the server side and the client side. That would be more difficult if I had to construct PHP echo strings, the typical WordPress template way.&#8221;</p>
<p>Wallace is integrated with the Customizer and will disable its JavaScript when it detects the Customizer is open, reverting back to a &#8220;normal&#8221; theme. Currently the only option users can customize is the site icon and site title. Wallace does not yet offer support for setting a static front page.</p>
<p>The next items on Wallace&#8217;s roadmap are adding more core features into the theme. Kirby said he is also exploring the idea of creating a commercial magazine theme in the future.</p>
<p>&#8220;I think the real killer use case for this way of developing themes is e-commerce, but I want to get a good solid magazine style premium theme done before I tackle that,&#8221; Kirby said.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 21 Dec 2016 22:43:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:62:"WPTavern: How to Make BuddyPress User Registration Invite-Only";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64644";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"https://wptavern.com/how-to-make-buddypress-user-registration-invite-only";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3486:"<p>One of the first things I recommend users do after installing WordPress is to either close user registration or install a plugin that protects the site against spam registrations. A friend of mine recently started a new WordPress site that has BuddyPress installed.</p>
<p>After two weeks, I chipped in to help him out and discovered more than 300 registered spam accounts. To make matters worse, these accounts were able to create new groups in BuddyPress and each one contained spam content. The first thing I did was close user registration then I began the boring process of removing the accounts.</p>
<p>We ran into an issue where legitimate users needed to create accounts while user registration was closed. After asking <a href="https://twitter.com/jeffr0/status/810664097868107777">for suggestions</a> on Twitter and performing a few Google searches, I discovered the <a href="https://wordpress.org/plugins/invite-anyone/">Invite Anyone</a> plugin by <a href="https://profiles.wordpress.org/boonebgorges/">Boone Gorges</a>. Invite Anyone allows registered members to invite people to register to the site via email while registration is closed.</p>
<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/InviteAnyoneSettings.png?ssl=1"><img class="size-full wp-image-64646" src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/InviteAnyoneSettings.png?resize=859%2C836&ssl=1" alt="Invite Anyone Settings" /></a>Invite Anyone Settings
<p>Using variables provided by the plugin, you can customize the email invitation subject line, the invitation message, and the text at the end of the email. I used the default values which happened to suit my needs. You can also give registered users the ability to customize the invitation subject line or message body and limit the number of emails members can send at one time. In my case, the most important setting to enable was allowing email invitations to be accepted even when site registration is disabled.</p>
<p>There are other configuration settings as well such as controlling who can send emails and limiting group invitations. Invite Only also has <a href="https://www.cloudsponge.com/signup/invite-anyone/">built-in support for CloudSponge</a>, a service where users can invite anyone from their address books without leaving your site. Stats are built-in as well but during testing I couldn&#8217;t get the Stats tab to load. The Stats tab loads the General Settings page instead.</p>
<p>Here&#8217;s what Invite Anyone looks like from a user&#8217;s BuddyPress profile page. In addition to inviting someone to the site, users can also invite them to a BuddyPress group as well.</p>
<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/InviteAnyoneFrontEnd.png?ssl=1"><img class="size-full wp-image-64647" src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/InviteAnyoneFrontEnd.png?resize=885%2C658&ssl=1" alt="What Invite Anyone Looks Like on the Frontend" /></a>What Invite Anyone Looks Like on the Frontend
<p>I&#8217;m using this plugin on a site running WordPress 4.7 and it&#8217;s functioning as expected. So far, we&#8217;ve invited three people and all of them were able to successfully register an account despite user registration being disabled. If you use BuddyPress and need a free solution that implements a user invitation system, I recommend <a href="https://wordpress.org/plugins/invite-anyone/">Invite Anyone</a>.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 21 Dec 2016 19:33:19 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:43:"HeroPress: The WordPress Mantra Is Mine Too";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/?post_type=heropress-essays&p=1537";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://heropress.com/essays/wordpress-mantra-mine/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:8731:"<img width="960" height="480" src="http://20094-presscdn.pagely.netdna-cdn.com/wp-content/uploads/2016/12/122116-1024x512.jpg" class="attachment-large size-large wp-post-image" alt="Pull Quote: The simple fact that I improve someone\'s life through my work means the world to me." /><h3>Transparency makes the world go round</h3>
<p>I like being honest, so please allow me to provide a context for this story. First of all, I&#8217;m a pretty introvert kind of guy, and I often need to be thrown in the cold water to start learning how to swim. This was exactly what happened with my teammate, Oana, when she asked me if I&#8217;d be tempted to give HeroPress a go. Of course I would, and so it started the beginning of this story. The next lines are the result of a friendly dialogue between us. Enjoy the ride, dear fellows.</p>
<p>Here&#8217;s Andrei, a passionate web dev who truly admires the WordPress world. I&#8217;m a full-time backend at Pixelgrade, a design studio where we create WordPress themes that solve real and painful digital problems. Yes, we don&#8217;t just play around with eye-candy pixels, we strive to show up with trustworthy solutions that make people&#8217;s lives easier and more pleasant.</p>
<p>I&#8217;ve experienced an intense professional rollercoaster till I got here. I still remember the first time I met with the WordPress fascinating world. It was during my first job interview. The employer (today a good friend of mine) told me that I would need to play around with Joomla, something I loved at that time. You can laugh, it&#8217;s okay. I do the same.</p>
<p>However, the interview was full of tricks since I needed to do something totally different: create a homepage into WordPress. This way, the team could have seen how fast I&#8217;m able to learn new stuff. Pretty good trap since everyone working in the digital playground needs to be open-minded and capable of improving their skills and knowledge.</p>
<p>That was the very first contact with WordPress, and I was surprised to see its potential. Not only it was easy-to-learn and get along with thanks to an in-depth documentation, but it also had an active community eager to help. Fast forward and the story had a happy ending: I got the job.</p>
<blockquote><p>Becoming better is kind of a mantra for the true WordPress people</p></blockquote>
<p>Starting from there and since today I still appreciate WordPress from top to toe. I have a bunch of reasons why I feel this world fits my values and principles. First of all, I enjoy all the PHP talking around WordPress. I find it interesting and challenging at the same time, and every time I have the chance to get involved, I accept it without hesitations. Another great aspect is directly related to my day-to-day job at Pixelgrade. The backend universe where I can improve an amount of cool things keeps my motivation up and kicking. On top of that, I resonate with JavaScript in various ways, backend and frontend too, and from time-to-time I write down my thoughts on my personal blog. I&#8217;m always happy to share ideas and provide feedback that helps. In the end, this is all about when you think of WordPress as an ecosystem, right?</p>
<p>Talking about this core mission, I must confess that WordPress can be felt like a lifestyle into a room with glass walls. Everyone sees what you do, how you do it, and why you keep doing it. Nobody can take your work for granted, but can easily be inspired by it and even improving it. Becoming better is kind of a mantra for the true WordPress people, and that&#8217;s why they jump in and start spreading solutions about how things can achieve a superior level. With other words, it&#8217;s like sailing with a bunch of amazing people eager to enjoy the same outstanding experience.</p>
<p>On the other hand, there are some coders that still think that WordPress is not that sexy and challenging in the end. They&#8217;re definitely not in the same boat, but I think it&#8217;s fair from our side to help them change their mind. And not because we chose to work in this playground, mostly because this platform changed a lot in the last years.</p>
<blockquote><p>The simple fact that I improve someone&#8217;s life through my work means the world to me.</p></blockquote>
<p>Here are my thoughts for all those programming lovers that would like to try WordPress, but need an extra boost.</p>
<h3>A wide range of features</h3>
<p>Articles, menus, widgets, users, live previews, e-commerce, e-learning, listings and so on. You can administrate them, make them better, simply play around as you wish. It might sound naive, but in reality these different areas are constantly bringing all kind of challenges on the table.</p>
<h3>Legacy code</h3>
<p>WordPress still strives to support the PHP 5.2.4 version, which was dropped five years ago but 7.5% from today&#8217;s websites still use it. But hey, WordPress is all about keeping users on board, happy and loyal, not skipping the battle. In the end, it does say something about the whole philosophy of the people behind the scenes.</p>
<h3>Colleges got it wrong</h3>
<p>There was a time where people studying Object Oriented Programming didn&#8217;t take WordPress seriously since it&#8217;s based on functional programming and that handy and approachable isn&#8217;t something that helps you progress. Well, things changed, people changed, now functional programming is turning back as the coolest thing to do nowadays, and WordPress is trying to get the best from both paradigms.</p>
<h3>WordPress makes me proud</h3>
<p>I mean it. It&#8217;s not just shiny words thrown into the digital garden. I&#8217;m a proud WordPress backend dev who deeply feels that impact matters, and building things for an open-source community matters even more. I&#8217;m also happy with the diverse work I do at Pixelgrade: one day can be Customify or the WP Body Class plugin, the next one can be improving Listable, a WordPress theme used by thousands of users spread all over the world. In between could be the passionate discussions regarding the core of WordPress, some advice tailored on other authors or the amazing WordCamp Europe. Whatever it is, I am grateful that I found my place where creativity, freedom, and braveness are in the first place.</p>
<p>Call it as you wish, but the simple fact that I improve someone&#8217;s life through my work means the world to me. It gives me a sense of fulfillment, the necessary energy to keep improving, and the never-ending joy that I did something useful. And hey, there&#8217;s just another beginning since Pixelgrade has reshaped its digital presence through an outstanding website and more consistent brand story. So bring it on, fellows!</p>
<div class="rtsocial-container rtsocial-container-align-right rtsocial-horizontal"><div class="rtsocial-twitter-horizontal"><div class="rtsocial-twitter-horizontal-button"><a title="Tweet: The WordPress Mantra Is Mine Too" class="rtsocial-twitter-button" href="https://twitter.com/share?text=The%20WordPress%20Mantra%20Is%20Mine%20Too&via=heropress&url=https%3A%2F%2Fheropress.com%2Fessays%2Fwordpress-mantra-mine%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-fb-horizontal fb-light"><div class="rtsocial-fb-horizontal-button"><a title="Like: The WordPress Mantra Is Mine Too" class="rtsocial-fb-button rtsocial-fb-like-light" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fheropress.com%2Fessays%2Fwordpress-mantra-mine%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-linkedin-horizontal"><div class="rtsocial-linkedin-horizontal-button"><a class="rtsocial-linkedin-button" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fheropress.com%2Fessays%2Fwordpress-mantra-mine%2F&title=The+WordPress+Mantra+Is+Mine+Too" rel="nofollow" target="_blank" title="Share: The WordPress Mantra Is Mine Too"></a></div></div><div class="rtsocial-pinterest-horizontal"><div class="rtsocial-pinterest-horizontal-button"><a class="rtsocial-pinterest-button" href="https://pinterest.com/pin/create/button/?url=https://heropress.com/essays/wordpress-mantra-mine/&media=https://heropress.com/wp-content/uploads/2016/12/122116-150x150.jpg&description=The WordPress Mantra Is Mine Too" rel="nofollow" target="_blank" title="Pin: The WordPress Mantra Is Mine Too"></a></div></div><a rel="nofollow" class="perma-link" href="https://heropress.com/essays/wordpress-mantra-mine/" title="The WordPress Mantra Is Mine Too"></a></div><p>The post <a rel="nofollow" href="https://heropress.com/essays/wordpress-mantra-mine/">The WordPress Mantra Is Mine Too</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 21 Dec 2016 12:00:43 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Andrei Lupu";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"WPTavern: The WordPress.org Homepage is Getting a Redesign";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64587";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:69:"https://wptavern.com/the-wordpress-org-homepage-is-getting-a-redesign";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3549:"<p>A WordPress.org homepage redesign is now in the works with a strong focus on marketing to new users. As the face of the open source project, the site is long overdue for some design attention. Mark Uraine, a designer at Automattic, <a href="https://make.wordpress.org/meta/2016/12/12/new-homepage-redesign/" target="_blank">posted</a> on the Make/Meta blog about how quickly the project is coming together:</p>
<p>&#8220;During the Contributor Day at WordCamp US, the Marketing Team sat down with a project in mind — the homepage of wordpress.org,&#8221; Uraine said. &#8220;Since the new design style is making an appearance in various places across the site, there was a desire to reboot the homepage as well.&#8221;</p>
<p><a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/wordpress-homepage.png?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/wordpress-homepage.png?resize=203%2C500&ssl=1" alt="" class="alignleft size-large wp-image-64631" /></a>Uraine posted the group&#8217;s original sketches as well as a screenshot of the initial draft on desktop and mobile. The screenshot doesn&#8217;t include the site&#8217;s header and footer, which will be added when the design is implemented. The team has also created a <a href="http://codepen.io/mapk/full/MbGpvR/" target="_blank">Codepen Prototype</a>, which demonstrates the fixed background featuring high profile WordPress sites that visitors see as they scroll.</p>
<p>&#8220;Keep in mind that this is only version 1.0 and we’re planning on launching and iterating quickly,&#8221; Uraine said when asking for feedback from the community. &#8220;Otto has offered his help to get this implemented. After a few technical revisions, I’ll be passing it over to him for implementation and providing support where I can.&#8221;</p>
<p>The redesign focuses on social proof (market share and showcase examples) as well as WordPress&#8217; features and extensibility:</p>
<p><em>&#8220;Extend WordPress with over 45,000 plugins to help your website meet your needs. Add an online store, galleries, mailing lists, forums, analytics, and much more.&#8221;</em></p>
<p>Since Uraine posted the design draft, commenters have been weighing in with revisions to the site copy, which hasn&#8217;t yet been finalized. A few contributors have also suggested including A/B testing, although no specific metrics have been determined. The redesign is moving fast, so make sure to jump in on the <a href="https://make.wordpress.org/meta/2016/12/12/new-homepage-redesign/" target="_blank">Make/Meta post</a> if you have feedback on the draft.</p>
<p>WordPress is getting more strategic about its marketing in 2017. Matt Mullenweg announced during the <a href="https://wptavern.com/state-of-the-word-2016-mullenweg-pushes-calypso-as-future-of-wordpress-interface-proposes-major-changes-to-release-cycle" target="_blank">2016 State of the Word</a> that he is bringing a new product-based leadership to core development and is assembling a <a href="https://wptavern.com/matt-mullenweg-proposes-wordpress-growth-council" target="_blank">Growth Council</a> to coordinate strategy with organizations invested in WordPress&#8217; growth.</p>
<p>&#8220;I think in the past WordPress got by on a lot of marketing happenstance,&#8221; Mullenweg said. &#8220;We can become a lot more sophisticated with our messaging and presentation on WordPress.org to bring people in and tell the story about what makes WordPress different.&#8221;</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 20 Dec 2016 20:45:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:69:"WPTavern: How to Change the Default Members Landing Tab in BuddyPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64592";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:80:"https://wptavern.com/how-to-change-the-default-members-landing-tab-in-buddypress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2880:"<p>For the past two weeks, I&#8217;ve been helping a friend build his site. The site uses WordPress and BuddyPress and is the first opportunity I&#8217;ve had to use BuddyPress for a project. The site is dedicated to a Hockey League league that&#8217;s specific to a video game. The league has a number of players and teams.</p>
<p>By default, when a visitor browses a BuddyPress member&#8217;s profile, the activity tab is displayed. Since a player&#8217;s team is displayed on a user&#8217;s profile, I wanted the profile tab to be the first thing users see. According to the <a href="https://codex.buddypress.org/getting-started/guides/change-members-profile-landing-tab/">BuddyPress Codex</a>, it&#8217;s possible to change the default landing tab by adding a line of code to either a bp-custom.php file or to wp-config.php. The code is as follows:</p>
<p><code>/**<br />
* Change BuddyPress default Members landing tab.<br />
*/<br />
define(\'BP_DEFAULT_COMPONENT\', \'profile\' );</code></p>
<p>As I didn&#8217;t want to create and upload another php file, I inserted the code into wp-config.php. At the time of writing this article, the help document on the BuddyPress Codex did not specify where in the wp-config file the code should be placed. After adding the code to the bottom of the wp-config file, I noticed it didn&#8217;t work.</p>
<p>The trick is to add it to a place that runs before BuddyPress is fully loaded. I moved the code so that is was after the define(&#8216;DB_COLLATE&#8217;, &#8221;); line in wp-config. This allowed the code to run without any issues.</p>
<a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/BPAddedCodetoWPConfig.png?ssl=1"><img class="size-full wp-image-64616" src="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/BPAddedCodetoWPConfig.png?resize=645%2C203&ssl=1" alt="Code Added to the Proper Place in the wpconfig File" /></a>Code Added to the Proper Place in the wp-config File
<p>With the code in place, whenever someone clicks on a player&#8217;s name that&#8217;s mentioned in a post, the first thing they see is their profile and the team they&#8217;re assigned too.</p>
<a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/ProfilePageLoadsFirst.png?ssl=1"><img class="size-full wp-image-64617" src="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/ProfilePageLoadsFirst.png?resize=645%2C370&ssl=1" alt="Profile Page Loads First in BuddyPress" /></a>Profile Page Loads First in BuddyPress
<p>This is a small change in how BuddyPress works but for an implementor like me, it was a bit of a hassle. The largest obstacle in achieving what I wanted were the directions that don&#8217;t specify where in the config file the code should be placed. I&#8217;ve since edited the Codex article to prevent others from experiencing the same trouble.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 20 Dec 2016 03:30:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:90:"WPTavern: WPWeekly Episode 256 – Interview With Tony Perez, CEO and Co-Founder of Sucuri";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wptavern.com?p=64479&preview=true&preview_id=64479";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:96:"https://wptavern.com/wpweekly-episode-256-interview-with-tony-perez-ceo-and-co-founder-of-sucuri";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2577:"<p>In this episode of WordPress Weekly, <a href="http://marcuscouch.com/">Marcus Couch</a> and I are joined by <a href="https://perezbox.com/">Tony Perez</a>, co-founder and CEO of <a href="https://sucuri.net/">Sucuri</a>. It&#8217;s easy to tell from this episode that Perez is extremely passionate about web security.</p>
<p>We discussed a wide range of topics related to security including, trends involving WordPress, <a href="https://blog.sucuri.net/2016/10/security-confusion-fud-factor.html">the FUD factor</a>, messaging surrounding HTTPS, and what <a href="https://blog.sucuri.net/2016/10/accounting-for-defense-in-depth-in-website-security.html">Defense in Depth</a> really means. We also discussed the three basic elements of security, <a href="https://perezbox.com/2015/10/website-security-is-not-an-absolute/">people, process, and technology</a>.</p>
<p>Perez spoke relatively quickly and at times, the conversation was technical. I recommend listening to the show at least twice in order to digest everything.</p>
<h2>Plugins Picked By Marcus:</h2>
<p><a href="https://wordpress.org/plugins/product-review/">Product Review</a> comes with common features that you may need for a review focused site. This includes editor reviews, user reviews, segmented rating, pros and cons, affiliate button and a lot more.</p>
<p><a href="https://wordpress.org/plugins/messenger-bot-for-woocommerce/">Messengerbot for WooCommerce</a> provides the ability to send your customers messages via Facebook Messenger. It supports Order Receipts, Order status changes, and Customer Order notes.</p>
<p><a href="https://wordpress.org/plugins/email-tracker/">Email Tracker</a> is a plugin that notifies you if the emails sent by WordPress using the wp_mail function have been read or not. It displays statistics like how many times an email has been read with the date and time.</p>
<h2>WPWeekly Meta:</h2>
<p><strong>Next Episode:</strong> Wednesday, December 21st 9:30 P.M. Eastern</p>
<p><strong>Subscribe To WPWeekly Via Itunes: </strong><a href="https://itunes.apple.com/us/podcast/wordpress-weekly/id694849738" target="_blank">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via RSS: </strong><a href="https://wptavern.com/feed/podcast" target="_blank">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via Stitcher Radio: </strong><a href="http://www.stitcher.com/podcast/wordpress-weekly-podcast?refid=stpr" target="_blank">Click here to subscribe</a></p>
<p><strong>Listen To Episode #256:</strong><br />
</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 20 Dec 2016 01:33:43 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:68:"WPTavern: WordCamp Bangkok 2017 Adds English Track, Debuts New Wapuu";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64566";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:78:"https://wptavern.com/wordcamp-bangkok-2017-adds-english-track-debuts-new-wapuu";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1978:"<p>Tickets for WordCamp Bangkok 2017 <a href="https://2017.bangkok.wordcamp.org/tickets-are-ready/" target="_blank">went on sale</a> over the weekend and there are 235 remaining. The event will be held on February 18, 2017, at CP Tower on Silom Road. This is the third WordCamp to take place in the Bangkok area but organizers are including an English Track for the first time at this year&#8217;s event. The Thai and English tracks will run side-by-side and will include WordPress topics for users of all levels.</p>
<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/wordcamp-bangkok-wapuu-e1482185243432.jpg?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/wordcamp-bangkok-wapuu-e1482185243432-300x274.jpg?resize=300%2C274&ssl=1" alt="" class="alignright size-medium wp-image-64601" /></a>Yesterday organizers <a href="https://2017.bangkok.wordcamp.org/wapuu-thailand/" target="_blank">unveiled the new Thailand Wapuu</a>, featuring traditional Thai garb and a banana stalk. Bananas leaves and stems, in addition to the fruit itself, make up an important part of Thai life with both ceremonial and practical uses.</p>
<p>The calls for <a href="https://2017.bangkok.wordcamp.org/call-for-speakers/" target="_blank">speakers</a> and <a href="https://2017.bangkok.wordcamp.org/call-for-sponsors/" target="_blank">sponsors</a> are open and higher level sponsorships are already sold out. Speaker applications will be accepted through January 5, 2017.</p>
<p>Previous WordCamps in the region were held in 2008 and 2009. During the past eight years the Thai WordPress community has grown and the <a href="https://www.facebook.com/groups/wpalliance/" target="_blank">Thai WordPress Alliance group</a> on Facebook now has more than 9,800 members. WordCamp Bangkok 2017 has a maximum capacity of 300 attendees. If you plan to go, make sure to purchase your ticket early before the event sells out.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 20 Dec 2016 00:43:52 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:53:"WPTavern: WooCommerce Powers 42% of All Online Stores";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64550";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:63:"https://wptavern.com/woocommerce-powers-42-of-all-online-stores";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5576:"<p>Last week Automattic<a href="https://automattic.com/year-in-review-2016/" target="_blank"> published</a> its annual &#8220;Year in Review&#8221; stats, including WooCommerce stats for the first time since the company <a href="https://wptavern.com/automattic-acquires-woocommerce" target="_blank">acquired Woo</a> in 2015. As of December, there are 1,594,894 active stores using WooCommerce and roughly 1/3 of those (530,000) are new in 2016.</p>
<p>One of the most exciting areas of growth is WooCommerce&#8217;s global market share. Although both the Year in Review post and the <a href="https://woocommerce.com/" target="_blank">WooCommerce website</a> have the software at 39%, <a href="http://trends.builtwith.com/shop" target="_blank">Builtwith stats</a> show WooCommerce powers 42% of all online stores. This is a huge leap from 30% a year and a half ago, when it was acquired.</p>
<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/woocommerce-market-share.png?ssl=1"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/woocommerce-market-share.png?resize=1025%2C613&ssl=1" alt="" class="aligncenter size-full wp-image-64553" /></a></p>
<p>WooCommerce market share is even higher in emerging markets like <a href="https://trends.builtwith.com/shop/country/India" target="_blank">India</a> (55% among stores using the .IN extension) and <a href="https://trends.builtwith.com/shop/country/Mexico" target="_blank">Mexico</a> (56% among stores using the .MX extension).</p>
<h3>WooCommerce in 2017: Evolving Storefront for Independent Stores</h3>
<p>In May 2016, <a href="https://wptavern.com/automattic-introduces-woocommerce-connect-hosted-components-for-e-commerce" target="_blank">WooCommerce introduced WC Connect</a>, its new Automattic-hosted SaaS architecture built on the WP REST API that makes it easier for users to add and configure store features. Real-time USPS shipping rates for US-based stores is the first of many planned hosted components. <a href="https://wptavern.com/woocommerce-2-6-introduces-shipping-zones-and-a-new-design-for-account-pages" target="_blank">Version 2.6</a> introduced the new Shipping Zones feature and an updated design for account pages. In 2016, WooCommerce also <a href="https://wptavern.com/woocommerce-releases-square-integration-to-sync-online-and-offline-purchases-and-inventory" target="_blank">released its Square integration</a> to sync online and offline purchases and inventory.</p>
<p>The plan for 2017, according to the Year in Review summary, is to continue making setup and scaling easier. At WordCamp US I asked Matt Mullenweg, CEO of Automattic, what he looks for in a buying experience and how he hopes to bring that to WooCommerce.</p>
<p>&#8220;When I buy from an independent store online, I&#8217;m looking for it to be as friction-free as possible,&#8221; Mullenweg said. &#8220;I don&#8217;t want a lot of steps. I don&#8217;t want it to force me to register if I don&#8217;t want to. I don&#8217;t want the form to error out in weird ways &#8211; anything that breaks my trust. When I visit a website to buy something, how a site looks can increase or decrease my trust.&#8221;</p>
<p>WooCommerce&#8217;s official <a href="https://woocommerce.com/storefront/" target="_blank">Storefront theme</a>, which is active on more than 80,000 stores, plays an important part in shaping the buying experience for millions of customers. Mullenweg said Storefront has a lot of potential for improvement.</p>
<p>&#8220;With the Storefront theme there&#8217;s actually a lot we can do there to make it look like a really cool store out of the box, much like the default themes in WordPress,&#8221; Mullenweg said. &#8220;Part of the reason we change them every year is what was cool in 2012 is not cool in 2017. Fashions change, trends change. I think Woo should evolve Storefront in the same way. There&#8217;s kind of a look for independent stores right now. They&#8217;ve got a certain vibe. Let&#8217;s make it easy to do that vibe, so that you don&#8217;t have to be on Etsy or Amazon or one of the e-commerce monoliths to keep people coming to you and supporting your product.&#8221;</p>
<p>Mullenweg said there are features in the power packs and add-ons that could be good candidates for building into Storefront. The theme <a href="https://wptavern.com/woothemes-launches-storefront-a-free-wordpress-theme-with-woocommerce-integration" target="_blank">launched in 2014</a> and since that time has made mostly gradual improvements. The last major design improvements were released last May in <a href="https://github.com/woocommerce/storefront/blob/master/changelog.md#20160506---200" target="_blank">version 2.0</a>, but many store owners opt for a child theme if they want more extensive design changes to Storefront.</p>
<p>If WooCommerce market share continues to grow at the same rate, it could easily pass 50% of all online stores in 2017. With <a href="https://woocommerce.com/meetups/" target="_blank">53 meetups</a> scattered across the globe &#8211; from Tokyo to Mumbai to Vancouver, the plugin is embracing the community factor that has made WordPress a success.</p>
<p>&#8220;I think both Jetpack and WooCommerce individually could each be bigger than WordPress.com,&#8221; Mullenweg said. &#8220;They&#8217;re both smaller than WordPress.com right now but I think each on their own could be several times larger. There are multi-billion dollar opportunities in both, so that&#8217;s what we&#8217;re working on.&#8221;</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 19 Dec 2016 19:26:08 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"WPTavern: Podcast Motor Acquires Seriously Simple Podcasting Plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64535";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:78:"https://wptavern.com/podcast-motor-acquires-seriously-simple-podcasting-plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2420:"<p><a href="http://seriouslysimplepodcasting.com/">Seriously Simple Podcasting</a>, created by <a href="https://hughlashbrooke.com/">Hugh Lashbrooke</a> in 2012, has been acquired by <a href="http://www.podcastmotor.com/">Podcast Motor</a>. The <a href="https://wordpress.org/plugins/seriously-simple-podcasting/">plugin</a> is actively installed on nearly 20K sites and out of 104 reviews, has an average rating of 4.9 stars.</p>
<p>Lashbrooke no longer has the time to dedicate to the project, &#8220;I am in fact selling the plugin (along with all of its add-ons) as I just no longer have the time or bandwidth available to support it in the way that I know it deserves,&#8221; Lashbrooke said. Lashbrooke created the plugin to <a href="https://hughlashbrooke.com/2015/11/25/democratising-podcasting/">democratize podcasting</a> and says it was never meant to be a full-time project.</p>
<a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/SSPSettingsPage.png?ssl=1"><img class="size-full wp-image-64542" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/SSPSettingsPage.png?resize=1025%2C541&ssl=1" alt="Seriously Simply Podcasting Settings Page" /></a>Seriously Simply Podcasting Settings Page
<p>Podcast Motor provides editing and production services to podcasters. Craig Hewitt, founder of Podcast Motor, acquired the plugin because of its established brand, ease of use, and it allows his company to serve a wider audience.</p>
<p>Seriously Simple Podcasting will remain a free plugin and Hewitt will continue to support it through WordPress.org. He also plans to add free features to increase the plugin&#8217;s value, &#8220;This will include things like bulk importing of episodes/feeds from other providers, RSS feed validation, and some enhanced front end styling of the on-page podcast display,&#8221; he said.</p>
<p>Hewitt is ready to breath new life into the project and is seeking feedback from users on what features they&#8217;d like to see added, &#8220;Our long-term goal is to enhance the functionality of the product so that it meets more needs of more podcasters down the road,&#8221; he said.</p>
<p>Instead of abandoning the plugin or putting it up for adoption, Lashbrooke has found it a new home with a developer eager to improve on his work. If you use Seriously Simple Podcasting, what features do you want to see added?</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 16 Dec 2016 23:07:51 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:30;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:82:"WPTavern: WP-CLI Project Launches Patron Support Model to Fund Ongoing Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64512";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:93:"https://wptavern.com/wp-cli-project-launches-patron-support-model-to-fund-ongoing-development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5912:"<p><a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/05/wp-cli.png?ssl=1"><img src="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/05/wp-cli.png?resize=1025%2C411&ssl=1" alt="" class="aligncenter size-full wp-image-55961" /></a></p>
<p>WP-CLI contributors have been <a href="https://wptavern.com/wp-cli-contributors-work-towards-a-more-sustainable-future-for-the-project" target="_blank">working towards a more sustainable future for the project</a> throughout 2016. Daniel Bachhuber, the project&#8217;s official maintainer, has launched an experiment to fund ongoing maintenance and new development, asking potential patrons, &#8220;<a href="http://wp-cli.org/blog/the-big-question.html" target="_blank">How much is WP-CLI worth to you?</a>&#8221; Options for contributions range from $100/yr &#8211; $7500/yr.</p>
<p>This particular funding experiment is not asking for one-time contributions but rather follows a subscriber model where patrons will be billed annually. Bachhuber said he has a number in mind in order to consider the funding a success but he is not going to share it.</p>
<p>&#8220;I want to see if this is a viable approach for funding a for-profit business,&#8221; Bacchuber said. He plans to fully refund subscribers if the campaign doesn&#8217;t reach its goal.</p>
<p>Last year Bachhuber <a href="https://wptavern.com/a-more-restful-wp-cli-kickstarter-campaign-is-now-187-funded" target="_blank">raised $32,822</a> in a highly successful Kickstarter campaign from 107 backers, which funded development during the first part of 2016. After the campaign he started a business called <a href="https://runcommand.io/" target="_blank">runcommand</a> that offered enterprise support and custom development for hosts and agencies. This was an attempt to help subsidize his time spent on WP-CLI, but it didn&#8217;t work out the way he planned:</p>
<blockquote><p>The business is doing alright, not great but not horrible. What I’ve come to realize, though, is that my time is zero-sum. I’m incentivized to spend time on runcommand, when I’d rather spend it on WP-CLI.</p>
<p>Ultimately, the challenge I’m running into is opportunity cost. I’d love to be able to invest more into WP-CLI, but doing so comes at the cost of other business pursuits. Because WP-CLI is such a large project, the several hours I volunteer each week are basically enough to fight entropy — not make headway on larger initiatives.</p></blockquote>
<p>Bachhuber said he hopes this patron-esque model will scale so he can hire a few people to work on WP-CLI, helping reduce his bus factor and creating a stronger contributor base.</p>
<p>&#8220;The project itself is at a point where it needs dedicated attention from maintainers, not occasional changes from contributors,&#8221; Bachhuber said in response to commenters on the post.</p>
<p>&#8220;I will, however, echo other comments here in regards to the wish for a public roadmap, more transparency, marketing efforts, and more in regards to the business being built upon WP-CLI,&#8221; subscriber Pippin Williamson said. &#8220;I have chosen to make my subscription payment as a donation to the project, not as a purchase/ of the product / service because, at this time at least, there&#8217;s not really anything I get out of it beyond continued development of the project.&#8221;</p>
<p>Williamson said the new <a href="https://runcommand.io/wp/doctor/" target="_blank">wp doctor</a> and <a href="https://runcommand.io/wp/profile/" target="_blank">wp profile</a> commands would not be of much use to him or his team. He also suggested that Bachhuber sell a professional subscription that offers a library of additional commands for popular plugins, such as WooCommerce, Easy Digital Downloads, WP Migrate DB Pro, and Gravity Forms.</p>
<p>&#8220;What I&#8217;ve come to appreciate is that WP-CLI will be far more successful in the long-term by building all of these in the open, instead of a more traditional model of making some selection of them paid-access,&#8221; Bachhuber said.</p>
<p>Subscriptions will help fund the ongoing maintenance of WP-CLI, the creation of new commands, and improvements to the website and package index.</p>
<p>For a project that is geared almost exclusively towards developers, there&#8217;s a surprisingly low number of contributors to its development. The brunt of it falls to Bachhuber as the official maintainer. His campaign puts the impetus on subscribers to help improve the tools they use every day through monetary contribution.</p>
<p>Hopefully, funding the organization will also precipitate a culture shift resulting in more developers who are motivated to get their hands dirty and become personally invested in the code base. Funding one person&#8217;s time is not the most effective way to keep a project afloat and may not do much to reduce the bus factor on the project unless Bachhuber can hire or inspire more maintainers.</p>
<blockquote class="twitter-tweet">
<p lang="en" dir="ltr">This year, I\'ve spent 308 hours on <a href="https://twitter.com/wpcli">@wpcli</a> (140 paid, 168 volunteer). Next year could be double or could be zero <a href="https://t.co/nujVBQZ3Bs">https://t.co/nujVBQZ3Bs</a></p>
<p>&mdash; Daniel Bachhuber (@danielbachhuber) <a href="https://twitter.com/danielbachhuber/status/809056634337042432">December 14, 2016</a></p></blockquote>
<p></p>
<p>By choosing to wrestle with the challenges of funding open source software in a transparent way, Bachhuber is paving the way for other project maintainers to learn from his experiments and pursue similarly unorthodox funding options. So far WP-CLI has received 17 subscribers. If it reaches 50, Bachhuber plans to create a members-only forum. The <a href="http://wp-cli.org/blog/the-big-question.html" target="_blank">funding experiment</a> closes on December 28th.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 15 Dec 2016 23:05:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:31;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:17:"Matt: A Poetition";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=46988";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:34:"https://ma.tt/2016/12/a-poetition/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:239:"<p>Joseph O&#8217;Neill has <a href="http://www.newyorker.com/magazine/2016/12/12/pardon-edward-snowden">an amazing and funny poetry-related short story Pardon Edward Snowden in the New Yorker which pokes fun at itself quite a bit</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 15 Dec 2016 20:11:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:32;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"WPTavern: WordPress.com Launches VR Content, Coming Soon to Jetpack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64486";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:77:"https://wptavern.com/wordpress-com-launches-vr-content-coming-soon-to-jetpack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4476:"<a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/VR.jpg?ssl=1"><img src="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/VR.jpg?resize=960%2C589&ssl=1" alt="" class="size-full wp-image-64492" /></a>photo credit: <a href="https://stocksnap.io/photo/OQLN09UT3X">Sebastian Voortman</a>
<p>WordPress.com <a href="http://en.blog.wordpress.com/2016/12/15/introducing-vr-and-360-content-for-all-wordpress-com-sites" target="_blank">announced</a> today that users can now upload and publish VR content on their sites, including 360° photos and 360° videos. Regular photos and panoramas are also now viewable in VR. The VR gear tested so far includes Cardboard, Gear, Daydream, Rift, and Vive.</p>
<p>Uploading VR content works just like adding normal pictures and videos. Users can then add 360° photos and videos to posts using a &#8220;vr&#8221; shortcode. The Harvard Gazette&#8217;s <a href="http://news.harvard.edu/gazette/story/2016/10/confronting-the-refugee-crisis/" target="_blank">Confronting the Refugee Crisis</a> story is one live example of the new VR content in action:</p>
<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/vr-example.gif?ssl=1"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/vr-example.gif?resize=523%2C526&ssl=1" alt="" class="aligncenter size-full wp-image-64503" /></a></p>
<p>&#8220;Our goal is to make publishing VR content as simple as publishing text or photos to the web,&#8221; Automattic team lead Toni Schneider said. Schneider, who is <a href="https://toni.org/2016/06/06/comparing-the-vive-to-the-rift/" target="_blank">a big VR fan himself</a>, led the team to bring VR capabilities to WordPress.com. He <a href="https://toni.org/2014/10/29/my-vr-memory/" target="_blank">worked in a VR startup</a> in the 90&#8217;s after college and has been a VR fan ever since.</p>
<p>&#8220;With the re-emergence of VR, it struck me that WordPress can play a role in making VR content easy to create and access for everyone, just like we did for text and photos,&#8221; Schneider said. His team at Automattic uses VR for collaboration and Schneider said &#8220;hearing [teammates&#8217;] voices in their proper spatial locations makes for a more natural and seamless collaboration experience&#8221; that feels less forced than a screenshare or video chat.</p>
<p>Immersive storytelling driven by VR technology is also finding its way into the publishing industry. As part of his article in <a href="http://www.niemanlab.org/collection/predictions-2017/" target="_blank">NiemanLab&#8217;s Predictions for Journalism 2017</a> series, Mario García, a media consultant and adjunct professor at Columbia University Graduate School of Journalism, predicts that &#8220;storytelling using VR will be easier to achieve, and more members of the audience will be prepared to welcome it.”</p>
<p>García cites the The New York Times and its <a href="https://www.nytimes.com/video/the-daily-360" target="_blank">Daily 360</a> section as one of the first publications to experiment with the medium. WordPress.com uses a similar UI, as you can see on the Harvard Gazette example, with an overlay that indicates VR content.</p>
<p>&#8220;One form of storytelling that will gain momentum: virtual reality,&#8221; García said. &#8220;It’s no coincidence: Editors and publishers are looking for ways to tell stories on mobile devices, and the future of virtual reality is also on mobile. For many newsrooms, VR is going to be the one big area for experimentation in 2017.&#8221;</p>
<p>WordPress.com is ready to ride this trend, making immersive storytelling available to all users &#8211; from large publications to small blogs. A few plugins, such as <a href="https://wordpress.org/plugins/vr-views/" target="_blank">VR Views</a> and <a href="https://wordpress.org/plugins/wp-vr-view/" target="_blank">WP-VR-view</a>, are already available for self-hosted sites, and WordPress.com plans to make its VR capabilities more widely available to the WordPress world soon.</p>
<p>&#8220;It will be in Jetpack soon, as soon as the next Jetpack release comes out,&#8221; Schneider said. &#8220;The technology is built to work on all WordPress sites and even beyond that, on any web site. We consider this first release just a start. As soon as we see how people use it, we will start adding more features and supporting more types of VR experiences.&#8221;</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 15 Dec 2016 17:39:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:33;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:20:"Matt: Another Dongle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=46982";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:37:"https://ma.tt/2016/12/another-dongle/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:508:"<p>One of my favorite new .blogs is The Dongle blog, at dongle.blog. I think it&#8217;s mostly meant to be funny, but I really agree with this post pointing out you <a href="http://dongle.blog/an-opportunity-for-a-new-dongle/">really need something that lets you plug in your lightning headphones to your laptop</a>. I&#8217;ve been trying out <a href="https://www.amazon.com/Audeze-Closed-Back-Headphones-Integrated-Lightning/dp/B01FE8VM8Q/">the Audeze EL-8</a> and they only have a lightning connector.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 14 Dec 2016 20:06:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:34;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"WPTavern: Matt Mullenweg Proposes WordPress Growth Council";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=59774";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:69:"https://wptavern.com/matt-mullenweg-proposes-wordpress-growth-council";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:9717:"<p><a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2015/01/plants.jpg?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2015/01/plants.jpg?resize=1025%2C505&ssl=1" alt="" class="aligncenter size-full wp-image-38240" /></a></p>
<p>During the last <a href="https://wptavern.com/wordsesh-4-now-available-on-video" target="_blank">WordSesh</a> event held in August 2016, Matt Mullenweg joined the community for a <a href="https://www.crowdcast.io/e/wordsesh4/21" target="_blank">session</a> where he spoke about the growth of WordPress and his thoughts on confronting the project&#8217;s external threats. Mullenweg floated the idea of a WordPress Growth Council &#8211; a collection of individuals and organizations interested in contributing to WordPress&#8217; growth.</p>
<p>&#8220;We have very direct competitors in Squarespace, Weebly, and Wix,&#8221; Mullenweg said. &#8220;Wix is a public company so it&#8217;s actually possible to see their numbers and look at things. This year alone there&#8217;s about a quarter billion dollars being spent in marketing by proprietary systems that compete against WordPress. That&#8217;s more spent in one year than has ever been invested in all of the WordPress companies combined since they started. That&#8217;s more money spent in marketing than for many consumer brands.&#8221;</p>
<p>WordPress has grown organically over the past 13 years through the power of its community, without expensive advertising campaigns or traditional marketing initiatives. For the first time, Mullenweg is looking to tap a segment of the community that hasn&#8217;t often been directly involved in contributions &#8211; people and organizations with large scale marketing expertise.</p>
<p>&#8220;I think we could do a lot to figure out a roadmap for countering this huge marketing spending being directed against us, because we are the big guy here,&#8221; Mullenweg said. &#8220;We are the 26% and they are like a 1%. But even though they&#8217;re smaller, they might be cannibalizing some of the most valuable aspects of the WordPress customer base.&#8221;</p>
<p>Just before WordCamp US, he formalized the idea with <a href="https://ma.tt/2016/12/wp-growth-council/" target="_blank">a post on his blog</a> and an open invitation for council member applicants:</p>
<blockquote><p>
Never have there been more threats to the open web and WordPress. Over three hundred million dollars has been spent in 2016 advertising proprietary systems, and even more is happening in investment. No one company in the WP world is large enough to fight this, nor should anyone need to do it on their own. We’d like to bring together organizations that would like to contribute to growing WordPress.</p></blockquote>
<p>The <a href="http://mcm.polldaddy.com/s/wordpress-growth-council" target="_blank">survey for potential council members</a> asks them to share what they bring to the table as well as a few ideas about the growth of WordPress so far, how it can be accelerated, and how the project can best respond to the millions of dollars competitors are spending in advertising. Responses have already started coming in.</p>
<p>Alexa Scordato, VP of Marketing at Stack Overflow, <a href="http://alexascordato.com/the-wordpress-growth-council-an-experiment-in-open-source-marketing/" target="_blank">applied to be part of the council</a>. She said her experience as a long-time WordPress user and marketing executive has motivated her to help improve the overall consumer experience.</p>
<p>&#8220;I’ve been tinkering with self-hosted WordPress sites since 2007 and I’ve helped probably 100+ individuals and organizations explore the merits of the .com and .org experience,&#8221; Scordato said. &#8220;Let’s get real – the relationship is confusing, the admin panel is intimidating, and the learning curve is steep. The product marketer in me is itching to help streamline the value proposition across these funnels to help make it easier to educate and on-board new users.&#8221;</p>
<p>She is also an advocate for the open web and sees WordPress as a key player in combating the threat of walled gardens and closed systems that diminish user freedoms.</p>
<p>&#8220;While many enterprises are beginning to invest more in open source projects, there’s an imbalance in the force,&#8221; Scordato said. &#8220;The fact that an open source platform like WordPress powers 27% of the web makes it the greatest agent in defending Internet freedom.&#8221;</p>
<p>Nuno Morgadinho, co-founder of WidgiLabs and co-organizer of WordCamp Lisbon, is another applicant to the growth council who <a href="http://www.morgadinho.org/2016/12/03/wp-growth-council/" target="_blank">published</a> thoughts on what it should address. He thinks WordPress needs to take a hard look at attrition before considering advertising.</p>
<p>&#8220;As important as advertising is, a lot of businesses struggle and fail, not because they aren’t adding new users, but because they are lousy at keeping the ones they’ve got,&#8221; Morgadinho said. &#8220;We have to look at ourselves and see where we are losing users rather than just desperately try to reach new ones. Most people use things based on referrals.&#8221;</p>
<h3>What Will the Growth Council Look Like?</h3>
<p>After WordCamp US, I had the opportunity to ask Mullenweg a few questions about what types of applicants he&#8217;s hoping to attract to the council. He said he envisions it will function very much like a working group or mastermind group where council members learn from each other.</p>
<p>&#8220;It&#8217;s not necessarily only people at larger companies &#8211; the biggest contributions will come from people who currently are or have in the past managed some sort of large promotion of something,&#8221; Mullenweg said. &#8220;It doesn&#8217;t need to be WordPress. Maybe they sold Starbucks. Large advertising campaigns are what we&#8217;re trying to counter so experience for that is a good precondition for participating in the growth council.&#8221;</p>
<p>Mullenweg said he has received applications from people whose companies aren&#8217;t in the WordPress ecosystem but who are experienced in this area and want to contribute some night and weekend hours to help out.</p>
<p>&#8220;I imagine there will be other folks, including from Automattic, that are going to be spending budgets of tens of millions of dollars in the coming year and want to talk about that,&#8221; Mullenweg said. &#8220;There are some things that could be shared, including publicly. Everyone who does marketing does some research first. Why don&#8217;t we open up that research? That&#8217;s part of what I want to encourage. By taking an open source approach to this, doing more sharing both within the council and in the wider WordPress community, I think there&#8217;s a lot more to learn.&#8221;</p>
<p>Mullenweg said the meetings won&#8217;t be completely open, as companies may want to share some confidential information. The council may have some house rules in place to make it a safe space for companies to share what they are doing and to keep strategies safe from competitors.</p>
<p>In 2017 Mullenweg has committed to putting on the &#8220;product lead&#8221; hat for WordPress core development and it seems he&#8217;ll be bringing that same approach to the growth council.</p>
<p>&#8220;Advertising is just a product, just like an interface is, just like a website is, just like anything else,&#8221; Mullenweg said. &#8220;There&#8217;s a lot of opportunity there.&#8221;</p>
<p>During his WordSesh session he outlined a few initial objectives for the council to tackle, including figuring out why the project has grown so far and understanding where the community&#8217;s resources are currently being spent.</p>
<p>&#8220;We should try to enumerate and track what is being spent right now, add up all the advertising, affiliate fees, and sponsorships of events,&#8221; Mullenweg said. &#8220;Determine what that adds up to so we know what is the gap we need to close and the relative arsenals on both sides.&#8221;</p>
<p>Mullenweg said he would like the council to figure out a plan for advertising where &#8220;we&#8217;re not competing with each other but really directing that outward against the folks who might go to Wix or Squarespace.&#8221; This particular aspect may be a challenge, as the council will need to avoid the appearance of serving only larger corporate interests in the fight against external threats.</p>
<p>&#8220;These external threats and proprietary threats are far bigger than any intra-WordPress open source threats,&#8221; Mullenweg said. &#8220;We can grow the pie far faster than we can take shares from people in the same pie.&#8221;</p>
<p>For the past three years, WordPress has consistently added 2% to its market share each year without any form of advertising. Instead of the project continuing to get by on &#8220;marketing happenstance,&#8221; as Mullenweg put it in the State of the Word address, 2017 will be the first year that WordPress makes a coordinated marketing effort to change the growth curve.</p>
<p>&#8220;The people power of WordPress is probably the thing that contributes most to the usage of WordPress,&#8221; Mullenweg said. The growth council&#8217;s challenge with advertising is producing that same magnetism on a larger scale without tarnishing the organic quality of the message. Can they come up with a marketing campaign that captures the essence of what WordPress is to the people who love it most? If the council is successful, it stands to have a positive impact on the WordPress economy as a whole.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 14 Dec 2016 19:50:25 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:35;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:82:"WPTavern: UpdraftPlus Acquires WP-Optimize, Will Be Integrated Into UpdraftCentral";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64460";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:92:"https://wptavern.com/updraftplus-acquires-wp-optimize-will-be-integrated-into-updraftcentral";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4048:"<p><a href="https://updraftplus.com">UpdraftPlus</a>, a European company that maintains a <a href="https://wordpress.org/plugins/updraftplus/">backup plugin by the same name</a> with nearly 1M active installs, <a href="https://updraftplus.com/updraftplus-confirms-acquired-wp-optimize/">has acquired</a> the <a href="https://wordpress.org/plugins/wp-optimize/">WP-Optimize</a> plugin. WP-Optimize was created eight years ago by <a href="https://profiles.wordpress.org/ruhanirabin/">Ruhani Rabin</a> and is actively installed on more than 500K sites. Its primary function is to clean and optimize databases. WP-Optimize will become part of a suite of plugins that make up <a href="https://updraftplus.com/updraftcentral/">UpdraftCentral</a>, a service that allows users to manage sites remotely.</p>
<a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/WPOptimize.png?ssl=1"><img class="size-full wp-image-64466" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/WPOptimize.png?resize=819%2C673&ssl=1" alt="WP Optimize Settings Page" /></a>WP-Optimize Settings Page
<p>In an effort to simply the process of optimizing databases, Rabin created WP-Optimize to automates tasks such as:</p>
<ul>
<li>Removing all unnecessary data (e.g. trashed/unapproved/spam comments, stale data) plus pingbacks, trackbacks and expired transient options</li>
<li>Compact/de-fragment MySQL tables</li>
<li>Perform optimizations without the need for running manual queries</li>
<li>Show database statistics and potential savings</li>
</ul>
<p>WP-Optimize started as a personal project but when Rabin discovered that other users were looking for similar functionality, he uploaded the plugin to WordPress.org, &#8220;It ended up being a much bigger project than I imagined; when I connected with other people, I was suddenly opened up to a world of new challenges,&#8221; Rabin said. &#8220;I was encouraged to constantly improve the software’s functionality and compatibility, as well as the support information available.&#8221;</p>
<p>As the plugin&#8217;s popularity and user base increased, it eventually became too much work to support and maintain. Rabin received a few acquisition offers over the years but decided not to sell, &#8220;For me, WP-Optimize’s legacy was of prime importance. I didn’t set it up to make money, but to help out as many people as possible,&#8221; he said.</p>
<p>One of the reasons Rabin accepted UpdraftPlus&#8217; offer is his familiarity with the plugin and its business model, &#8220;Even though they are business-driven, they still have a great freemium ecosystem,&#8221; Rabin said. He also appreciates the company&#8217;s enthusiasm and drive to take the product to the next level.</p>
<p>David Anderson, founder and lead developer of UpdraftPlus, says the acquisition makes perfect sense, &#8220;Although we see a lot of revolution on the outside, the WordPress core has been stable for a long time, and as such, there will always be a need for database optimization in order for sites to run efficiently.&#8221;</p>
<p>As part of the acquisition, Rabin will take on an advisory role in its continued development. Multisite support, a commercial version with additional features, and the ability for users to control it remotely through UpdraftCentral, are among the top priorities in development.</p>
<p>Since the acquisition, UpdraftPlus has released a new version of <a href="https://wordpress.org/plugins/wp-optimize/changelog/">WP-Optimize </a>that Anderson says paves the way for future developments, &#8220;This release has a complete re-factoring of the plugin’s internals, to lay a solid foundation for future improvements.&#8221;</p>
<p>&#8220;Although it looks the same outwardly, it has been modernized and solidified,&#8221; Anderson said. &#8220;We have a great and growing team, a lot of experience in the internals of WordPress and also a lot of users who trust and depend on us. There’s plenty of opportunity for us to expand.&#8221;</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 14 Dec 2016 19:39:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:36;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:42:"HeroPress: Changing Careers with WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/?post_type=heropress-essays&p=1525";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/essays/changing-careers-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:8191:"<img width="960" height="480" src="http://20094-presscdn.pagely.netdna-cdn.com/wp-content/uploads/2016/12/121416-1024x512.jpg" class="attachment-large size-large wp-post-image" alt="Pull Quote: Anyone who says it\'s easy to change your life is lying to you." /><p>Working in WordPress full time did not come quickly, directly, or in the ways I expected, and it was worth every step of the way. I started out in marketing in the music industry and ended up as the project manager at a WordPress development agency nearly 10 years later. Changing careers is a lot of work and none of it happens by accident. Here’s a story about how I took some dashed hopes and an economic crash and turned it into everything I ever wanted.</p>
<p>I started out by moving to NYC the day I graduated college to work in the music industry. Armed with my BA in English, I found my way in &#8211; I don’t care what anyone says, my English degree is my secret weapon.</p>
<blockquote><p>If you can’t communicate effectively and hold someone’s interest in the process, it doesn’t matter how many letters you have after your name or how many specialized degrees you hold.</p></blockquote>
<p>However, once I established myself as a project manager a major record label in the big city, it wasn’t easy to stay. I loved New York, but I did not love working nights to make ends meet. Realizing that my career in the music industry might not be something I could do long-term, I enrolled part-time in an accredited web development diploma program. All the classes were online, so I could do classwork around my work schedule. However, the record label was bought out and privatized, and the new owners instituted a 50% reduction in headcount worldwide. I tried to look at it as a blessing in disguise &#8212; more time to spend on completing my diploma while working fewer hours as a temp! But, answering phones and entering data didn’t exactly make me want to get out of bed in the morning. I tried to focus on shifting gears to becoming a developer.</p>
<h3>Becoming A Developer</h3>
<p>Though I got a great base of knowledge in HTML, CSS, PHP, Photoshop, light JavaScript, and, yes, Flash and ActionScript, I didn’t really have the goods to get a programming job right away. I was eventually re-hired in a different position by the record label, but this time I was slowly but surely working more digital into my marketing position. Finally, I had done enough to get another job as the head of digital marketing for a boutique music and entertainment-focused agency.</p>
<p>Though I was finally doing the type of work I wanted to do, I was starting to feel like New York wasn’t where I needed to be. One major pull was my long-distance NY to LA relationship. Sometimes, career is just not enough to keep you in one spot, so in June of 2011, I moved to Orange County, CA.</p>
<p>I was able to continue working remotely for the entertainment PR firm, but I wanted a more meaningful connection with the artists I was working with. I started freelancing for select bands, and then found a position handling all things internet-related for an Orange County-based artist management company.</p>
<p>It was an absolute dream &#8211; I was the social media voice for one of my favorite bands, plus many more new clients and projects I would have loved even if I wasn’t on the management team. In the interest of meeting new people in this new place as well as learning something, I started attending the Orange County WordPress Meetup at Zeek Interactive and learned how to take my general knowledge of PHP and apply it to this CMS that everyone seemed to be talking about. As some of our up-and-coming bands needed websites, I’d volunteer to build them. It was cost-effective for the client, and it gave me a chance to try out all the things I’d learned at the OCWP meetup. I also served as internal project manager for sites built by an external agency.</p>
<blockquote><p>I learned more from the many mistakes I made in developing websites than I did anything else.</p></blockquote>
<p>Coding myself into a corner was an opportunity to grow through asking someone else to show me where I went wrong. For a while, the OCWP developer night featured some time for someone to get up in front of everyone, walk the group through an issue they were working on, show their steps and reasoning, and ask for assistance. All the more experienced developers in the room were very kind to me, several of them going out of their way to help me learn new concepts to make my themes even better.</p>
<h3>Branching Out</h3>
<p>Bands don’t need websites all that often, and I wanted to keep learning, so I found some non-entertainment website work to do on evenings and weekends. For a lot of it, I was a second pair of hands for another developer. For others, friends or friends of friends would come to me for help with their small business sites. These small sites worked out great, but I fully understood that the way I was working had a ceiling to it. If it’s a relatively small site with not a lot of traffic to scale, I could help. If it was going to be a big site that a lot of people would see, my code would probably not be ideal. I knew enough to be dangerous, and I knew how to fix a site if and when it white-screened, but not enough to implement all the latest and greatest techniques.</p>
<p>So, I started looking to get back into my first love: project management, only this time for websites instead of musicians. Thankfully, my friend Steve Zehngut suddenly found himself with a need to replace his PM, and after we talked through goals and methods of working, we made it official.</p>
<p>I’ve been the project manager at Zeek Interactive for two years now, and it’s been everything I could have ever hoped for. It took nearly a decade, retraining, lots of late nights and weekends spent learning new things and getting way outside my comfort zone, but I successfully changed industries and careers. Anyone who says it’s easy to change your life is lying to you. But I’m hard-pressed to find a reason not to do it anyway if you want to make new and better things happen.</p>
<div class="rtsocial-container rtsocial-container-align-right rtsocial-horizontal"><div class="rtsocial-twitter-horizontal"><div class="rtsocial-twitter-horizontal-button"><a title="Tweet: Changing Careers with WordPress" class="rtsocial-twitter-button" href="https://twitter.com/share?text=Changing%20Careers%20with%20WordPress&via=heropress&url=https%3A%2F%2Fheropress.com%2Fessays%2Fchanging-careers-wordpress%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-fb-horizontal fb-light"><div class="rtsocial-fb-horizontal-button"><a title="Like: Changing Careers with WordPress" class="rtsocial-fb-button rtsocial-fb-like-light" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fheropress.com%2Fessays%2Fchanging-careers-wordpress%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-linkedin-horizontal"><div class="rtsocial-linkedin-horizontal-button"><a class="rtsocial-linkedin-button" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fheropress.com%2Fessays%2Fchanging-careers-wordpress%2F&title=Changing+Careers+with+WordPress" rel="nofollow" target="_blank" title="Share: Changing Careers with WordPress"></a></div></div><div class="rtsocial-pinterest-horizontal"><div class="rtsocial-pinterest-horizontal-button"><a class="rtsocial-pinterest-button" href="https://pinterest.com/pin/create/button/?url=https://heropress.com/essays/changing-careers-wordpress/&media=https://heropress.com/wp-content/uploads/2016/12/121416-150x150.jpg&description=Changing Careers with WordPress" rel="nofollow" target="_blank" title="Pin: Changing Careers with WordPress"></a></div></div><a rel="nofollow" class="perma-link" href="https://heropress.com/essays/changing-careers-wordpress/" title="Changing Careers with WordPress"></a></div><p>The post <a rel="nofollow" href="https://heropress.com/essays/changing-careers-wordpress/">Changing Careers with WordPress</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 14 Dec 2016 12:00:52 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Sarah Wefald";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:37;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:51:"WPTavern: Harare, Zimbabwe Hosts Its First WordCamp";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64419";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:61:"https://wptavern.com/harare-zimbabwe-hosts-its-first-wordcamp";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3497:"<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/wordcamp-harare.jpg?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/wordcamp-harare.jpg?resize=1025%2C560&ssl=1" alt="" class="size-full wp-image-64426" /></a>photo credit: <a href="http://www.techzim.co.zw/2016/12/wordcamp-2016-harare-learning-pictures/">Limbikani Soul Makani Kabweza</a>
<p><a href="https://2016.harare.wordcamp.org/" target="_blank">WordCamp Harare</a>, the first ever WordCamp in Zimbabwe, was held over the weekend at the Harare City Library. Harare was selected out of 182 applicants as one of the three locations for the <a href="https://wptavern.com/wordcamp-incubator-program-to-launch-in-indonesia-zimbabwe-and-columbia" target="_blank">WordCamp Incubator Program</a>. The experimental program launched in February 2016 with the goal of bringing WordCamps to new locations around the world where local meetups may not be as well established.</p>
<p>WordCamp Harare was successful at connecting the Zimbabwean WordPress community and introducing the attendees to the concept of a WordCamp.</p>
<p>&#8220;It was a great day because we met lots of people who are passionate about WordPress and building stuff on the internet,&#8221; Limbikani Soul Makani Kabweza said in his <a href="http://www.techzim.co.zw/2016/12/wordcamp-2016-harare-learning-pictures/" target="_blank">recap</a> of the event. Kabweza is a contributor at <a href="http://www.techzim.co.zw/" target="_blank">Techzim</a>, a Zimbabwean tech publication that runs on WordPress.</p>
<p>&#8220;As Techzim (and the other startups we work with like <a href="http://www.soccer24.co.zw/" target="_blank">Soccer24</a> and <a href="http://www.pindula.co.zw/news/" target="_blank">Pindula</a>) the internet is our lifeblood, so a day dedicated to discussing internet platforms and how to do things better was the amazingly enriching experience we expected it to be.&#8221;</p>
<p>Co-organizer Charles Muzonzini, who works as a web and mobile app developer with <a href="http://www.csz.org.zw/" target="_blank">The Computer Society of Zimbabwe</a>, said, &#8220;WordCamp Harare 2016 was an awesome success, far exceeding my expectations. Everything was on point and I’m glad to have met so many great people and learnt so much. This is hands down the best IT conference this year.&#8221; Muzonzini is also a co-organizer of the <a href="http://www.meetup.com/Harare-WordPress-Meetup/" target="_blank">Harare WordPress Meetup</a>, which now has 82 members.</p>
<p>Job Thomas, who works as an Education Vanguard at Automattic, traveled from Cape Town to speak about WooCommerce at the WordCamp. In a <a href="https://2016.harare.wordcamp.org/open-source-empowering-africa/" target="_blank">guest post</a> for the event Thomas wrote about the importance of open source for the empowerment of Africa in removing hindrances for becoming successful.</p>
<p>&#8220;It is great to see WordCamp Harare happening,&#8221; Thomas said. &#8220;WordCamps are not primarily events for communicating ideas – although this plays a big role. WordCamps are primarily a celebration of the open source community; they gather people with a similar passion for making the web a better place.&#8221;</p>
<p>WordCamp Harare was the fourth WordCamp held in Africa in 2016, joining events in Nairobi, Johannesburg, and Cape Town in the expansion of the WordPress community in southern and eastern Africa.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 13 Dec 2016 05:11:55 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:38;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:73:"WPTavern: WordPress 2.7 Is the Role Model for How Design Can Lead the Way";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64183";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:84:"https://wptavern.com/wordpress-2-7-is-the-role-model-for-how-design-can-lead-the-way";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:11607:"<p>When Matt Mullenweg, co-creator of the WordPress open source project, <a href="https://videopress.com/v/IYfHX4jN?at=3472">announced that</a> design would lead the way for WordPress development in 2017, utilizing user research and mockups, the first thing that came to my mind was WordPress 2.7. That release was the culmination of effective leadership and effort from Jen Mylo and Liz Danzico. In order to learn why this release is in a class of its own, we must look at how it was created.</p>
<h2>Introducing Crazyhorse</h2>
<p>On March 29th, 2008, WordPress 2.5 &#8220;Brecker&#8221; <a href="https://wordpress.org/news/2008/03/wordpress-25-brecker/">was released</a> to the world. The biggest feature in 2.5 was the redesigned backend that was built in collaboration with <a href="http://happycog.com/">Happy Cog</a>.</p>
<p>When Mullenweg gave the public a <a href="https://wordpress.org/news/2008/03/25-sneak-peek/">sneak peek</a> at the redesigned backend, he had this to say:</p>
<blockquote><p>For the past few months, we’ve been working with our friends at Happy Cog — <a href="http://zeldman.com/">Jeffrey Zeldman</a>, <a href="http://jasonsantamaria.com/">Jason Santa Maria</a>, and <a href="http://bobulate.com/">Liz Danzico</a> — to redesign WordPress from the ground-up. The result is a new way of interacting with WordPress that will remain familiar to seasoned users while improving the experience for everyone. This isn’t just a fresh coat of paint — we’ve re-thought the look of WordPress, as well as how it’s organized so that you can forget about the software and focus on your own creative pursuits.</p></blockquote>
<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/WordPress25PostEditor.jpg?ssl=1"><img class="size-full wp-image-64399" src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/WordPress25PostEditor.jpg?resize=1008%2C643&ssl=1" alt="WordPress 2.5 Post Editor" /></a>WordPress 2.5 Post Editor
<p>While some people <a href="http://socializedsoftware.com/2008/03/30/wordpress-25-review/">praised the redesign</a>, others <a href="http://scottberkun.com/2008/wordpress-25-review/">were not happy</a>, particularly with the menu hierarchy. Since sentiment in the community was mixed, Mylo contracted Ball State University’s Center for Media Design, Insight and Research to <a href="https://wordpress.org/news/2008/10/usability-testing-report-25-and-crazyhorse/">perform a usability report</a> on the WordPress 2.5 admin design. The report was used to figure out which issues were based on interface problems versus people simply not liking the changes.</p>
<p>Usability <a href="http://wpdotorg.wordpress.com/files/2008/10/wp-testreport-205-crazyhorse-1028a08jw.pdf">testing results</a> were shared with lead developers which inspired a prototype interface to address some of the issues discovered. This allowed developers to use WordPress 2.5 on their own sites and the prototype on a test site. However, once testing began with the prototype interface, it became clear that a more ambitious approach was required.</p>
<p>According to Mylo, the second prototype known as &#8220;Crazyhorse&#8221; blew test subjects away:</p>
<blockquote><p>The second round of testing blew everyone away. The research team had never seen such consistent results. Tasks were completed faster, participant opinions rated it higher, understanding of how interface elements worked was greater, and it wasn’t even a fully functional application. Of the test participants, every single one said they would choose the prototype over their current administrative interface, and it wasn’t even pretty.</p></blockquote>
<p>Throughout the 2.7 development process, Mylo used a number of communication channels to gather user feedback. On September 15th, 2008, Mylo published a <a href="https://wordpress.org/news/2008/09/wordpress-27-navigation-options-survey/">Navigation Options Survey</a>. The survey was part of a broader effort to get more people involved in the design and decision process:</p>
<blockquote><p>As part of the mission to increase user involvement in design decisions, we’ve created a survey intended to give WordPress users the ability to play a part in deciding how the navigation options should be grouped and labeled.</p></blockquote>
<p>Later that month, a <a href="https://wordpress.org/news/2008/09/wordpress-2-7-survey-no2/">second survey</a> was created that allowed users to vote on mockups of the search box, favorites menu, the Future/Publish and Edit Timestamp buttons. It only took two days for the survey to reach its maximum response count of 5,000.</p>
<a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/CrazyhorseWireframe.png?ssl=1"><img class="size-full wp-image-64416" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/CrazyhorseWireframe.png?resize=894%2C666&ssl=1" alt="Crazyhorse Wireframe" /></a>Crazyhorse Wireframe
<p>Once the survey concluded, Mylo <a href="https://wordpress.org/news/2008/10/wordpress-27-wireframes/">published a follow-up post</a> as well as a document containing <a href="https://wpdotorg.files.wordpress.com/2008/10/wf-dashboard_v002_093008jw.pdf">wireframes</a> that gave users an idea of what the end product might look like. Near the middle of October, 2008, Mylo <a href="https://wordpress.org/news/2008/10/the-visual-design-of-27/">published</a> semi-polished screenshots of the 2.7 interface and explained how it worked. Matt Thomas and Andy Peatling are largely responsible for the design of WordPress 2.7.</p>
<a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/WordPress27Dashboard.png?ssl=1"><img class="size-full wp-image-64418" src="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/WordPress27Dashboard.png?resize=597%2C753&ssl=1" alt="WordPress 2.7 Dashboard" /></a>WordPress 2.7 Dashboard
<p>The response to the screenshots was <a href="https://wordpress.org/news/2008/10/the-new-27-dashboard/">overwhelmingly positive</a>. A week after showcasing the 2.7 dashboard, Mylo <a href="https://wordpress.org/news/2008/10/calling-all-wordpress-loving-icon-designers/">asked the WordPress community</a> to create a set of icons to go with each of the navigation sections. More than a dozen people submitted icon sets and instead of choosing one, Mylo <a href="https://wordpress.org/news/2008/11/wordpress-27-project-icon/">let the community vote</a> on which set best matched WordPress 2.7&#8217;s style. With 35% of the vote, the <a href="https://wordpress.org/news/2008/11/the-results-of-project-icon/">winning set</a> was created by <a href="http://bendunkle.com/">Ben Dunkle</a>.</p>
<a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/BDIcons.png?ssl=1"><img class="size-full wp-image-64421" src="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/BDIcons.png?resize=147%2C479&ssl=1" alt="Ben Dunkle\'s Winning Icon Set" /></a>Winning Icon Set
<p>I asked Dunkle what inspired him to create the icons and if Mylo didn&#8217;t offer the opportunity to the community the way that she did, if he would have contributed to WordPress 2.7 otherwise.</p>
<p>&#8220;When I saw Jen&#8217;s post calling for icon designers to submit a set for 2.7, it was right at the deadline,&#8221; Dunkle told the Tavern. &#8220;I can&#8217;t remember how I found the post, since I didn&#8217;t visit the WordPress development blog very often. I&#8217;d been building sites with WordPress for few years by that time, and really enjoyed it, but I didn&#8217;t think much about the online community.&#8221;</p>
<p>&#8220;Jen expressed the direction eloquently: &#8216;Icons should be subtle, with a classic/designed look, nothing cartoonish. Thin lines. Maybe a little old-fashioned looking.&#8217; I was designing icons for other open source projects around that time, and the language of the post struck a chord with me. I rushed out an email.</p>
<p>&#8220;I ended up as a finalist, pushed the pixels, and sent off the design. Mine got the most votes. The contest caused some controversy, since anything resembling spec work has always been a lightning rod in the design community. I didn&#8217;t see it that way. It was an open source project and I was a volunteer, not a contractor.</p>
<p>&#8220;In the end, it launched an ongoing connection that I maintain to this day. They&#8217;re now called Dashicons, made with vectors instead of pixels, and soon to be SVGs instead of web fonts (once we get the bugs sorted out).&#8221;</p>
<p>After going through the beta and release candidate stages, WordPress 2.7 &#8220;Coltrane&#8221; was <a href="https://wordpress.org/news/2008/12/coltrane/">released to the public</a> on December 11th, 2008. More than 150 people contributed code directly to the release and countless others contributed with valuable feedback during opportune times through surveys, mailing lists, and testing.</p>
<p>Referring to WordPress 2.7, longtime user Ozh <a href="http://planetozh.com/blog/2008/12/a-journey-through-five-years-of-wordpress-interface/">had this to say</a>, &#8220;The dev team asked users what they wanted and what they liked, and the result is light years beyond what the design studio produced for 2.5 six months earlier. One word to summarize it all: &#8216;Above the fold!\'&#8221;</p>
<h2>WordPress 2.7 Set a Great Standard</h2>
<p>During Contributor day at WordCamp US 2016, I asked Mullenweg if the WordPress 2.7 development process inspired the experimental approach to developing WordPress in 2017.</p>
<blockquote><p>Yeah, I mean that was one of the beginnings to Jen&#8217;s contributions and her huge impact on the WordPress world. She brought an entirely different way of thinking with a user first, usability, research led mindset. It was fantastic to have female leadership demonstrating very early on in the WordPress community that this is software made by everyone for everyone. What that was for its time is a great standard to hold ourselves up to as we move forward in 2017.</p></blockquote>
<p>Out of all the WordPress releases I&#8217;ve covered since 2007, WordPress 2.7 is special. It&#8217;s the only release where I feel like a lot of the community rallied together and focused on making WordPress better. Through surveys, comments, blog posts, testing, and reaching out to talented people in the community for help, Mylo proved that the community can be part of the development and design process of WordPress and end up with a better product as a result.</p>
<p>Things have changed since 2008. The community, contributor pool, and the project itself has become larger. Communication is spread out among the Make Blogs as well as SlackHQ. The WordPress development process is more open now than ever before. Since WordPress 2.7&#8217;s release, I haven&#8217;t felt the same spark of rallying together for a common goal that Mylo was able to foster. Perhaps it&#8217;s because I&#8217;m not part of a project team like the REST API or I&#8217;m not searching for it in the right places. I hope those feelings are rekindled in 2017.</p>
<p>It will be interesting to see how the new development process works out. Until then, I leave you with a wonderful quote from Mylo as it succinctly captures the way I feel and remember the WordPress 2.7 development cycle.</p>
<p>&#8220;I hope you enjoy getting an inside look at how we’ve been organizing our thoughts around 2.7, and that when the community feedback starts flowing everyone remembers that we all want the same thing: the best WordPress possible.&#8221;</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 13 Dec 2016 01:56:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:39;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:29:"Matt: State of the Word, 2016";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=46950";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:45:"https://ma.tt/2016/12/state-of-the-word-2016/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2117:"<p></p>
<p>The full video and Q&amp;A from 2016&#8217;s State of the Word last week in Philadelphia is now online. This year was especially exciting because it wasnt&#8217; just a look back at the previous year, but sets out a new direction for where WordPress will be in 2017 and beyond.</p>
<p>If you want just the slides, here they are:</p>
<p>  </p>
<div> <strong> <a href="https://www.slideshare.net/photomatt/state-of-the-word-2016" title="State of the Word 2016" target="_blank">State of the Word 2016</a> </strong> from <strong><a target="_blank" href="http://www.slideshare.net/photomatt">photomatt</a></strong> </div>
<p>Like every year, there was a ton of help bringing this together. Mark Uraine led the slides, and at various points these folks pitched in as well: Mel Choyce, Tammie Lister, Michael Arestad, Ashleigh Axios, Ian Dunn, Corey McKrill, Martin Remy, Josepha Haden, Alex Kirk, Marina Pape, Alx Block, Cami Kaos, Matias Ventura, Donncha O Caoimh, John Maeda, Barry Abrahamson, Nikolay Bachiyski, Chrissie Pollock, Sam Sidler, Boris Gorelik, Dion Hulse, Brooke Dukes, Sarah Blackstock. I also got input and suggestions from Petya Raykovska, Tony Perez, Joe Casabona, Helen Hou-Sandi, Jon Bossenger, Jason Cohen, Daniel Bachhuber, Drew Butler, Ryan Boren, Andrew Roberts, Joost de Valk, Stephane Daury, Dion Hulse, Gary Pendergast, David Bisset, Ryan McCue, Alex Shiels, Brian Krogsgard, Joe Hoyle, Sean Blakeley, Andrew Nacin, Mark Jaquith, John Blackbourn, and thank you to Rose Kuo for inspiring the poetry theme which featured prominently this year.</p>
<p><a href="https://wptavern.com/state-of-the-word-2016-mullenweg-pushes-calypso-as-future-of-wordpress-interface-proposes-major-changes-to-release-cycle">Tavern</a> and <a href="https://poststatus.com/matt-mullenweg-state-word-2016/">Post Status</a> wrote up the talk itself. As a follow-up I did interviews with both to expand on some of what was discussed in the speech. The <a href="https://poststatus.com/interview-matt-mullenweg-new-wordpress-release-cycle/">Post Status one is now up</a> and you can watch it here:</p>
<p></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 12 Dec 2016 21:10:21 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:40;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:74:"WPTavern: Bluehost Network Outage Hits Customers with 12 Hours of Downtime";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64386";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:81:"https://wptavern.com/bluehost-network-outage-hits-users-with-12-hours-of-downtime";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4435:"<p>Over the weekend, <a href="https://www.bluehost.com/" target="_blank">Bluehost</a> experienced a severe, widespread network issue that caused customer sites to go down. The incident began Friday evening and continued into the night. As WP Tavern is hosted on Bluehost, we were watching the situation with keen interest, finally clocking the downtime at 12 hours before our site was back up.</p>
<blockquote class="twitter-tweet">
<p lang="en" dir="ltr">We are seeing problems w/ network flapping which could be caused by denial of service or other network issues in our switching fabric. (1/5)</p>
<p>&mdash; Bluehost (@bluehost) <a href="https://twitter.com/bluehost/status/807394100630667265">December 10, 2016</a></p></blockquote>
<p></p>
<p>The Bluehost Twitter and Facebook accounts kept customers updated as network engineers worked to resolve the issue. Shortly after midnight Bluehost said they identified a network loop within a portion of the network. Staff worked to restore services &#8220;while making sure we do not reintroduce the loop into the network.&#8221;</p>
<p>At approximately 10 hours into the downtime, Bluehost updated customers who were still down, citing &#8220;a packet filtering problem&#8221; in its core routing layer for which the team had created a fix. Within a couple more hours most of the company&#8217;s customers were back online.</p>
<blockquote class="twitter-tweet">
<p lang="en" dir="ltr">We have identified a packet filtering problem in our core routing layer. We have worked closely with our vendor to develop a global fix- 1/2</p>
<p>&mdash; Bluehost (@bluehost) <a href="https://twitter.com/bluehost/status/807491514830098432">December 10, 2016</a></p></blockquote>
<p></p>
<p>Bluehost&#8217;s earliest communications about the downtime indicated a DDoS attack may have caused the incident, though this is no longer a strong consideration.</p>
<p>&#8220;It doesn’t appear to be a DDoS but we are conducting a full investigation,&#8221; Bluehost head of product Brady Nord told the Tavern after the incident. His team worked around the clock to identify and resolve issues until customer sites came back up.</p>
<p>&#8220;Many of our dedicated and VPS customers were affected to some degree for approximately 12 hours,&#8221; Nord said. &#8220;We made every attempt to keep our customers informed during the event as information became available because we understand our customers depend on our products and services.&#8221;</p>
<p>Nord would not share further details about the cause of the outage but said the company plans to complete a detailed post mortem to prevent future outages.</p>
<p>&#8220;With any significant event that affects our customer base, we conduct an extensive examination after the event to ensure we understand the root cause and develop a course of action to improve our systems and procedures,&#8221; Nord said.</p>
<p>Bluehost is one of the hosts listed on <a href="https://wordpress.org/hosting/" target="_blank">WordPress&#8217; recommended hosting page</a> and Nord said roughly 2/3 of the company&#8217;s customer base uses WordPress.</p>
<p>&#8220;The incident last night mainly impacted our dedicated and VPS customers which is a lower density section of the platform,&#8221; Nord said.</p>
<p>Bluehost has not yet published the results of its investigation, but support staff have <a href="https://twitter.com/bluehostsupport/status/807670769685856256" target="_blank">replied</a> to customer inquiries with a fairly definitive assessment of the issue as having been due to a spanning tree issue on their core routing layer.</p>
<blockquote class="twitter-tweet">
<p lang="en" dir="ltr"><a href="https://twitter.com/saxangle">@saxangle</a> Sure we can tell you what happened. We discovered a spanning tree issue on our core routing layer which caused network degradation</p>
<p>&mdash; help.bluehost.com (@bluehostsupport) <a href="https://twitter.com/bluehostsupport/status/807670769685856256">December 10, 2016</a></p></blockquote>
<p></p>
<p><a href="http://www.cisco.com/c/en/us/support/docs/lan-switching/spanning-tree-protocol/10556-16.html" target="_blank">Spanning tree protocol</a> misconfigurations can cause network problems similar to what Bluehost experienced but results of the investigation should confirm whether this was the root of problem that took customer sites down over the weekend.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 12 Dec 2016 17:48:20 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:41;a:6:{s:4:"data";s:11:"





";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:52:"HeroPress: WordCamp US Talk, The People Of WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://heropress.com/?p=1524";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/wordcamp-us-talk-people-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2810:"<p>I was incredibly honored to speak at WordCamp US in Philadelphia this year. It was especially cool to hear from people all over the world watching on the live stream.</p>
<p>The hardest part was telling only a few stories that would fit into the time slot, and not every story on this site.</p>
<p>If you missed the talk, it&#8217;s now on <a href="http://wordpress.tv/2016/12/11/topher-derosia-heropress-the-people-of-wordpress/">WordPress.tv</a>, but you can also watch it right here.</p>
<p></p>
<p>I love speaking, and I&#8217;ll probably talk about HeroPress again, what are some other topics and ideas you&#8217;d like to hear about?</p>
<p>Please leave a comment and let me know.</p>
<div class="rtsocial-container rtsocial-container-align-right rtsocial-horizontal"><div class="rtsocial-twitter-horizontal"><div class="rtsocial-twitter-horizontal-button"><a title="Tweet: WordCamp US Talk, The People Of WordPress" class="rtsocial-twitter-button" href="https://twitter.com/share?text=WordCamp%20US%20Talk%2C%20The%20People%20Of%20WordPress&via=heropress&url=https%3A%2F%2Fheropress.com%2Fwordcamp-us-talk-people-wordpress%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-fb-horizontal fb-light"><div class="rtsocial-fb-horizontal-button"><a title="Like: WordCamp US Talk, The People Of WordPress" class="rtsocial-fb-button rtsocial-fb-like-light" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fheropress.com%2Fwordcamp-us-talk-people-wordpress%2F" rel="nofollow" target="_blank"></a></div></div><div class="rtsocial-linkedin-horizontal"><div class="rtsocial-linkedin-horizontal-button"><a class="rtsocial-linkedin-button" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fheropress.com%2Fwordcamp-us-talk-people-wordpress%2F&title=WordCamp+US+Talk%2C+The+People+Of+WordPress" rel="nofollow" target="_blank" title="Share: WordCamp US Talk, The People Of WordPress"></a></div></div><div class="rtsocial-pinterest-horizontal"><div class="rtsocial-pinterest-horizontal-button"><a class="rtsocial-pinterest-button" href="https://pinterest.com/pin/create/button/?url=https://heropress.com/wordcamp-us-talk-people-wordpress/&media=http://heropress.com/wp-content/plugins/rtsocial/images/default-pinterest.png&description=WordCamp US Talk, The People Of WordPress" rel="nofollow" target="_blank" title="Pin: WordCamp US Talk, The People Of WordPress"></a></div></div><a rel="nofollow" class="perma-link" href="https://heropress.com/wordcamp-us-talk-people-wordpress/" title="WordCamp US Talk, The People Of WordPress"></a></div><p>The post <a rel="nofollow" href="https://heropress.com/wordcamp-us-talk-people-wordpress/">WordCamp US Talk, The People Of WordPress</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 12 Dec 2016 00:50:56 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:42;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:86:"Post Status: Interview with Matt Mullenweg on the new WordPress release cycle and more";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:31:"https://poststatus.com/?p=31281";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:76:"https://poststatus.com/interview-matt-mullenweg-new-wordpress-release-cycle/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1765:"<p>During contributor day of WordCamp US in Philadelphia, I was able to interview Matt Mullenweg to follow up on several items he announced in the <a href="https://poststatus.com/matt-mullenweg-state-word-2016/">State of the Word</a>.</p>
<p>We mostly discussed the new WordPress development cycle and how it will work with the three focus areas. We also discussed how that will affect other non-major updates and WordPress features.</p>
<p>Matt also talked about the WordPress REST API, how he defines success for it, what he hopes to see out of it, and what he thinks would cause it to revert to a plugin only feature.</p>
<p>And as this was the second and final year of WordCamp US in Philadelphia, we reflected on the event, and talked about what there is to look forward to in Nashville for WordCamp US 2017 and 2018.</p>
<p>You can listen to just the audio, also on our podcast, which you can find <a href="https://itunes.apple.com/us/podcast/post-status-draft-wordpress/id976403008">on iTunes</a>, <a href="https://play.google.com/music/m/Ih5egfxskgcec4qadr3f4zfpzzm?t=Post_Status__Draft_WordPress_Podcast">Google Play</a>, <a href="http://www.stitcher.com/podcast/krogsgard/post-status-draft-wordpress-podcast">Stitcher</a>, and <a href="http://simplecast.fm/podcasts/1061/rss">via RSS</a> for your favorite podcatcher.</p>
<a href="https://audio.simplecast.com/54882.mp3">https://audio.simplecast.com/54882.mp3</a>
<p><a href="https://audio.simplecast.com/54882.mp3">Direct Download</a></p>
<p>Or just watch the <a href="https://www.youtube.com/watch?v=Lh5DF5-6UoE">video on YouTube</a>, or below for the full experience. And don&#8217;t forget to subscribe to <a href="https://www.youtube.com/c/PostStatus">my new channel on YouTube</a>.</p>
<p></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 10 Dec 2016 22:53:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Brian Krogsgard";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:43;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:50:"bbPress: bbPress 2.5.12 – Requires WordPress 4.7";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://bbpress.org/?p=179733";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:71:"https://bbpress.org/blog/2016/12/bbpress-2-5-12-requires-wordpress-4-7/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:959:"<p>Oh, bother! Out now is bbPress 2.5.12, which fixes a bug for WordPress 4.7 users who did the right thing and updated to bbPress 2.5.11. Some of you may have noticed your bbPress menu items disappear &#8211; this release fixes that stinger. <img src="https://s.w.org/images/core/emoji/2/72x72/1f41d.png" alt="?" class="wp-smiley" /></p>
<p>2.5.12 officially bumps the minimum WordPress version requirement to 4.7 for all releases going forward. If you are stuck on a previous version of WordPress, please continue to use 2.5.11.</p>
<p>This cut-off is in place because the improvements to user-roles in WordPress 4.7 are really that important, and all future bug-fix releases to 2.5 and major releases going forward will be taking advantage of them.</p>
<p>If you&#8217;ve updated to 4.7 and are one of the unlucky few to get stung by the missing-menu bug, please accept my sincere apologies along with an update to 2.5.12 to relieve the itching.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Dec 2016 08:02:16 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:17:"John James Jacoby";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:44;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:59:"WPTavern: WPWeekly Episode 255 – All About the Customizer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wptavern.com?p=64372&preview=true&preview_id=64372";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:66:"https://wptavern.com/wpweekly-episode-255-all-about-the-customizer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2964:"<p>In this episode of WordPress Weekly, <a href="http://marcuscouch.com/">Marcus Couch</a> and I are joined by <a href="https://weston.ruter.net/">Weston Ruter</a> and <a href="http://celloexpressions.com/">Nick Halsey, </a>lead developers of the <a href="https://make.wordpress.org/core/components/customize/">Customize component</a> in WordPress.</p>
<p>I invited Ruter and Halsey on the show to give us some insight into its origin and why it was created. We also discuss its evolution since WordPress 3.6 and why it&#8217;s an important <a href="https://wptavern.com/state-of-the-word-2016-mullenweg-pushes-calypso-as-future-of-wordpress-interface-proposes-major-changes-to-release-cycle">part of WordPress&#8217; future</a>.</p>
<p>The duo shared their experience of what it&#8217;s like to iterate on a feature that routinely receives push-back from a subset of the community. We also talk about the perception that features are continuously being crammed into the Customizer when it&#8217;s really about adding live previews to WordPress functionality.</p>
<p>Last but not least, Ruter and Halsey describe what improvements we can expect to see going forward. For details on how to contribute to the Customize component, please visit the <a href="https://make.wordpress.org/core/components/customize/">Make Core Customize Component </a>website.</p>
<h2>Plugins Picked By Marcus:</h2>
<p><a href="https://wordpress.org/plugins/product-designer/">Product Designer</a> allows you to display an awesome Product Designer on your website via short-code. You can add unlimited clip art using a custom post. Text can be used with a fancy font family, font size and color.</p>
<p><a href="https://wordpress.org/plugins/text-to-speech-widget/">Text To Speech Widget</a> converts any text into speech in a selected language and voice. It supports 63 voices in different languages. The plugin is based on HTML5 and doesn&#8217;t require using Flash.</p>
<p><a href="https://wordpress.org/plugins/featured-products-first-for-woocommerce/">Featured Products First for WooCommerce</a> allows a product in WooCommerce to be featured on the first shop page as well as search results. It also comes with a sidebar widget to display featured products on the homepage.</p>
<h2>WPWeekly Meta:</h2>
<p><strong>Next Episode:</strong> Wednesday, December 14th 3:00 P.M. Eastern</p>
<p><strong>Subscribe To WPWeekly Via Itunes: </strong><a href="https://itunes.apple.com/us/podcast/wordpress-weekly/id694849738" target="_blank">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via RSS: </strong><a href="https://wptavern.com/feed/podcast" target="_blank">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via Stitcher Radio: </strong><a href="http://www.stitcher.com/podcast/wordpress-weekly-podcast?refid=stpr" target="_blank">Click here to subscribe</a></p>
<p><strong>Listen To Episode #255:</strong><br />
</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Dec 2016 01:23:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:45;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"WPTavern: WordCamp Europe Calls for Host City Applications for 2018";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64343";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:78:"https://wptavern.com/wordcamp-europe-calls-for-host-city-applications-for-2018";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3711:"<a href="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/planning.jpg?ssl=1"><img src="https://i1.wp.com/wptavern.com/wp-content/uploads/2016/12/planning.jpg?resize=960%2C416&ssl=1" alt="" class="size-full wp-image-64370" /></a>photo credit: <a href="https://stocksnap.io/photo/5ZMT04MIW6">Oli Dale</a>
<p>Even though the <a href="https://2017.europe.wordcamp.org/2016/11/28/join-us-as-a-speaker-at-wordcamp-europe/" target="_blank">call for speakers</a> for WordCamp Europe 2017 has just opened, organizers are already on the hunt for a city to <a href="https://2017.europe.wordcamp.org/2016/12/08/apply-to-host-wordcamp-europe-2018/" target="_blank">host the event in 2018</a>. The team chosen to host in 2018 will need to be planning throughout 2017 and should be present on the ground in Paris, so the selection process is already underway.</p>
<p>WordCamp Europe is currently WordPress&#8217; largest community event, and support and mentorship have been a key part of its success. Petya Raykovska, a past organizer, said the prospect of organizing the event can be intimidating for new teams but mentors will be available to applicants throughout the process.</p>
<p>&#8220;The mentors are supposed to help the local teams prepare a better application,&#8221; Raykovska said. &#8220;They are all experienced WCEU organizers who can help with many aspects of the planning.&#8221;</p>
<p>Host city selection is based on more than two dozen factors, including organizer experience, location, venue, and budget considerations. One of the most challenging aspects is securing a venue that can accommodate 3,000 attendees, but applicants are given a lot of flexibility on the event date.</p>
<p>&#8220;We ask volunteers to book a venue for 3,000 people,&#8221; Raykovska said. &#8220;Not only are there not many venues that can fit us at this scale, most of them are booked years in advance.&#8221;</p>
<p>Raykovska said organizers can book dates anywhere from May 1 &#8211; June 31, 2018. This makes it possible to have more cities and venues vying to host the event.</p>
<p>Raykovska volunteered in Leiden in 2013 and helped organize WordCamp Sofia after that. In 2014, she applied to host WordCamp Europe in Sofia along with Tina Kesova, Nikolay Bachiyski, Veselin Nikolov, and Mario Peshev. Since that time she has been involved in organizing the event and mentoring newcomers. Potential applicants are encouraged to get in touch if they are wondering if their team has what it takes.</p>
<p>&#8220;Sometimes these conversations serve as a reality check,&#8221; Raykovska said. &#8220;People can get super enthusiastic about organizing without having an idea of the time commitment. We want WCEU to be a positive experience for organizers and make sure our local teams have enough people and are aware what it takes to get involved as a local host.&#8221;</p>
<p><a href="https://2017.europe.wordcamp.org/2016/12/08/apply-to-host-wordcamp-europe-2018/" target="_blank">Applications for host city</a> will be open through February 15, 2017 and the decision will be made by the end of February. The team selected for 2018 will then join the 2017 planning team to gain a better understanding of the process. Potential applicants who want to be matched to a mentor can get in touch by emailing host at wp-europe.org.</p>
<p>&#8220;In late 2013, one tweet pushed the WordCamp Sofia team to apply to host WCEU,&#8221; Raykovska said. &#8220;It turned into the most incredible journey I&#8217;ve taken so far with stops further beyond the future host cities of Seville, Vienna, and Paris. It&#8217;s time for someone to write the next chapter of the story.&#8221;</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 08 Dec 2016 23:44:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:46;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:65:"Post Status: Photos from Post Status Publish and WordCamp US 2016";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:31:"https://poststatus.com/?p=31040";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:67:"https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:52709:"<p>Last week was a whirlwind of events. On Thursday, December 1st, I hosted the inaugural <a href="https://poststatus.com/publish">Post Status Publish</a>, which was a ton of fun. And following that event, we had three straight days of <a href="https://2016.us.wordcamp.org">WordCamp US</a>.</p>
<p><a href="https://twitter.com/rzen">Brian Richards</a> and I teamed up to take pictures and cover the event.</p>
<h3>Post Status Publish</h3>
<p>Publish was on Thursday. We have a lot of video, but fewer pictures. Here is a selection taken by Brian Richards. If you took photos at Publish, we&#8217;d love to see them as well!</p>

<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-1/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-1-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-4/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-4-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-3/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-3-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-6/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-6-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-5/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-5-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-7/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-7-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-8/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-8-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-10/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-10-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-9/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-9-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-11/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-11-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-12/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-12-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-14/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-14-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-13/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-13-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-16/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-16-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-15/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-15-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-17/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-17-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-19/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-19-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-20/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-20-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-21/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-21-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-22/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-22-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-24/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-24-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-23/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-23-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-25/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-25-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-26/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-26-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-27/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-27-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-28/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-28-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-29/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-29-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-31/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-31-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-32/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-32-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-34/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-34-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/publish-2016-33/"><img width="114" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/publish-2016-33-114x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>

<h3>WordCamp US</h3>
<p>Then there was WordCamp US. I unfortunately didn&#8217;t get to any sessions other than Matt&#8217;s State of the Word. But thankfully they&#8217;ll all be up on WordPress.tv, so I can catch up on the many that I wanted to attend.</p>
<p>All photos directly before and during Matt&#8217;s <a href="https://poststatus.com/matt-mullenweg-state-word-2016/">State of the Word</a> are by Brian Richards. I took most of the hallway shots.</p>

<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-1/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-1-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-2/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-2-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-3/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-3-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-4/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-4-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-5/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-5-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-6/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-6-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-8/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-8-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-7/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-7-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-10/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-10-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-11/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-11-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-12/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-12-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-14/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-14-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-13/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-13-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-16/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-16-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-15/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-15-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-17/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-17-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-18/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-18-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-19/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-19-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-20/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-20-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-21/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-21-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-22/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-22-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-24/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-24-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-23/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-23-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-25/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-25-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-27/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-27-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-28/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-28-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-29/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-29-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-30/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-30-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-31/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-31-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-32/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-32-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-33/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-33-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-35/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-35-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-34/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-34-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-36/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-36-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-37/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-37-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-39/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-39-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-38/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-38-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-41/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-41-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-40/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-40-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-43/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-43-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-42/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-42-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-44/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-44-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-45/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-45-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-47/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-47-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-46/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-46-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-48/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-48-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-49/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-49-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-51/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-51-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-50/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-50-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-52/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-52-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-53/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-53-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-54/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-54-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-55/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-55-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-57/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-57-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-56/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-56-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-58/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-58-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-59/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-59-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-60/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-60-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-61/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-61-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-62/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-62-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-63/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-63-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-66/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-66-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-65/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-65-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-67/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-67-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-68/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-68-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-69/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-69-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-70/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-70-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-71/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-71-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-72/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-72-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-73/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-73-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-74/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-74-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-75/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-75-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-76/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-76-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-77/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-77-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-78/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-78-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-79/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-79-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-80/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-80-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-81/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-81-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-82/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-82-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-83/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-83-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-84/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-84-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-85/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-85-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-86/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-86-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-87/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-87-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-89/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-89-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-92/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-92-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-93/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-93-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-96/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-96-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-97/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-97-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-101/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-101-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-102/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-102-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-103/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-103-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-104/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-104-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-105/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-105-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-106/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-106-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-107/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-107-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-108/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-108-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-110/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-110-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-111/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-111-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-112/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-112-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-113/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-113-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-114/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-114-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-115/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-115-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-116/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-116-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-117/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-117-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-118/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-118-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-119/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-119-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-120/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-120-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>

<h3>WordCamp US Contributor Day</h3>
<p>Finally, Contributor Day was on Sunday. In addition to the contributor area itself, lunch was at the market where you can choose from a variety of lunch spots, with common cafeteria seating. I had an awesome spicy roast pork sandwich from Dinic&#8217;s, which I took a few pictures of as well.</p>

<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-122/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-122-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-121/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-121-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-123/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-123-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-124/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-124-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-125/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-125-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-127/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-127-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-126/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-126-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-128/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-128-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-129/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-129-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-130/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-130-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-131/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-131-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-132/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-132-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-133/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-133-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-134/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-134-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-135/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-135-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-136/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-136-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-137/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-137-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-138/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-138-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-139/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-139-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-140/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-140-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-141/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-141-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-142/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-142-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-143/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-143-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-144/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-144-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-145/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-145-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-146/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-146-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-147/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-147-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-148/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-148-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-149/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-149-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-150/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-150-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-151/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-151-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-152/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-152-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-153/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-153-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-154/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-154-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-155/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-155-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-156/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-156-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-159/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-159-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-158/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-158-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-161/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-161-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-160/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-160-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-163/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-163-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-162/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-162-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-164/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-164-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-165/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-165-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-166/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-166-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-167/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-167-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-168/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-168-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-169/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-169-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-170/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-170-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-172/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-172-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-171/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-171-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-174/"><img width="150" height="100" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-174-150x100.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>
<a href="https://poststatus.com/photos-post-status-publish-wordcamp-us-2016/wcus-2016-173/"><img width="100" height="150" src="https://cdn.poststatus.com/wp-content/uploads/2016/12/wcus-2016-173-100x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" /></a>

<p>I&#8217;ll have more coverage of both Publish and WordCamp US for Post Status Members in the coming days. In the meantime, I hope you enjoy the pictures! If you&#8217;d like to use any of them, you are free to do so, and while credit is not required, it&#8217;s always appreciated.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 08 Dec 2016 20:49:38 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Brian Krogsgard";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:47;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:95:"WPTavern: GoDaddy Acquires WP Curve, Aims to Become a One-Stop Shop for WordPress Professionals";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64287";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:105:"https://wptavern.com/godaddy-acquires-wp-curve-aims-to-become-a-one-stop-shop-for-wordpress-professionals";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5040:"<p><a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/09/godaddy-logo.jpg?ssl=1"><img src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/09/godaddy-logo.jpg?resize=680%2C295&ssl=1" alt="" class="aligncenter size-full wp-image-61236" /></a></p>
<p><a href="https://wpcurve.com/" target="_blank">WP Curve</a>, a WordPress services business that focuses on completing small jobs for customers, <a href="https://wpcurve.com/wp-curve-joins-godaddy/" target="_blank">announced</a> this week that GoDaddy has acquired the company. Founders Dan Norris and Alex McClafferty bootstrapped WP Curve in 2013 and have processed 105,000+ jobs through its pipeline.</p>
<p>&#8220;WP Curve complements GoDaddy’s expanding WordPress offering including Managed WordPress and the recent ManageWP addition,&#8221; the company said in the announcement.</p>
<p>Existing customers will be on-boarded to GoDaddy accounts with their current subscriptions. After the transition, the newly acquired WP Curve team will assist in scaling the services to support GoDaddy&#8217;s WordPress customers. Norris plans to exit the company and McClafferty will lead the team at GoDaddy.</p>
<h3>GoDaddy&#8217;s Plans for WP Curve</h3>
<p>Gabe Mays, head of WordPress Products at GoDaddy, said the WP Curve acquisition is an important part of GoDaddy&#8217;s goal to become &#8220;a one-stop shop for WordPress professionals.&#8221; Roughly one third of all GoDaddy sites are running on WordPress, and half of all new sites are using the software. This is one of the reasons GoDaddy plans to <a href="https://wptavern.com/wordpress-passes-27-market-share-banks-on-customizer-for-continued-success" target="_blank">invest in improvements to WordPress&#8217; core customizer component</a>.</p>
<p>&#8220;WP Curve will help us in two ways,&#8221; Mays said. &#8220;First we’re adding WP Curve’s WordPress experts to the company and we’ll leverage their expertise to improve the training and tools for the hundreds of GoDaddy Customer Care representatives that support our customers globally.</p>
<p>&#8220;Second, we’ll directly offer WP Curve&#8217;s services to our customers,&#8221; Mays said. &#8220;This combination will be amazing for our customers and create a compelling one-stop shop for WordPress professionals and their clients.&#8221;</p>
<p>Mays said WP Curve&#8217;s services &#8220;will continue to be offered as standalone services&#8221; but GoDaddy may consider adding them to its hosting plans sometime in the future.</p>
<p>&#8220;Down the road it&#8217;s possible we&#8217;ll see aspects integrated into our Hosting plans to improve the customer experience, especially for nascent WordPress users,&#8221; Mays said.</p>
<p>Mays would not comment on whether GoDaddy has more acquisitions in the pipeline, but the company is likely to require additional expertise if it aims to become a one-stop shop for WordPress professionals. GoDaddy is part of a more recent trend of hosting companies acquiring WordPress products and services, including its <a href="https://wptavern.com/godaddy-acquires-wordpress-site-management-service-managewp" target="_blank">ManageWP acquisition</a> and <a href="https://wptavern.com/flywheel-acquires-wordpress-local-development-tool-pressmatic" target="_blank">Flywheel&#8217;s purchase of Pressmatic</a>. The trend has sparked some recent discussion on Twitter regarding &#8220;hosting companies eating WordPress:&#8221;</p>
<blockquote class="twitter-tweet">
<p lang="en" dir="ltr">If software is eating the world, then hosting companies are eating WordPress.</p>
<p>&mdash; Cory Miller (@corymiller303) <a href="https://twitter.com/corymiller303/status/805891418866806784">December 5, 2016</a></p></blockquote>
<p></p>
<p>Mays sees this notion as a positive development and an opportunity for hosts to become more deeply invested in WordPress core and the surrounding ecosystem.</p>
<p>&#8220;We see it as win-win for hosts and the WordPress community, more investment in WordPress is better for everyone,&#8221; Mays said. &#8220;For example, this year we hired our first core contributor, contributed full translations to some of the most popular themes and plugins, built a number of themes and plugins and contributed them to the WordPress repo and more. As a WordPress community we need all the investment we can get to reach our 50% goal and beyond.&#8221;</p>
<p>Just days after the WP Curve acquisition, GoDaddy <a href="https://aboutus.godaddy.net/newsroom/news-releases/news-releases-details/2016/GoDaddy-Acquires-Host-Europe-Group-Becomes-Market-Leader-In-Europe-For-Small-Business-Cloud-Services/default.aspx" target="_blank">announced</a> its acquisition of <a href="https://www.heg.com/" target="_blank">Host Europe Group</a> (HEG) for $1.8 billion. HEG is Europe&#8217;s largest privately-owned web services provider in Europe and the purchase delivers 1.7 million new customers to GoDaddy, expanding the company&#8217;s international reach.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 08 Dec 2016 20:49:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:48;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:75:"WPTavern: The Value of Sponsoring a WordCamp from a Business’ Perspective";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://wptavern.com/?p=64315";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:83:"https://wptavern.com/the-value-of-sponsoring-a-wordcamp-from-a-business-perspective";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:27974:"<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/tony-perez-sucuri.jpg?ssl=1"><img class="wp-image-64317 size-thumbnail" src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/tony-perez-sucuri.jpg?resize=150%2C150&ssl=1" alt="Tony Perez, CEO of Sucuri" /></a>Tony Perez, CEO of Sucuri
<p>This is a guest post written by Tony Perez, <a href="http://perezbox.com/about/">co-founder and CEO</a> of <a href="https://sucuri.net">Sucuri</a>. Sucuri is a website security platform that helps clean and protect websites. I would consider us a small mid-sized company. Our annual sponsorship budget is in the range of $300 &#8211; $400k per calendar year (CY).</p>
<p>One of the industry events we’ve been actively participating in since our inception has been WordCamps. Unlike 2015, in 2016 I decided to be more pragmatic in the way we invest in WordCamps. This new approach stemmed from two basic questions &#8211; <b>What is the ROI of sponsoring a WordCamp and should a business sponsor a WordCamp?</b></p>
<p>One qualifier I want to add before getting started is that tracking success at events is very difficult. Even with the number of tools and approaches in the market, many organizations struggle getting their hands around the actual ROI of any event sponsorship. This means that many of the points in this post are not unique to the WordPress ecosystem, but the uniqueness and openness of the community makes it worth discussing.</p>
<hr />
<h1>The Reality of WordCamps and Sponsors</h1>
<p>It’s been many years since I helped co-organize a WordCamp (<a href="https://2011.sandiego.wordcamp.org/">San Diego back in 2011</a>), and there is no denying that a lot has changed in the way they are put together. The one thing that hasn’t changed however, is the struggle organizers face when it comes to fundraising. Over the years we’ve seen a number of awesome initiatives by the <a href="http://wordpressfoundation.org/">WordPress Foundation</a> to help assist in the process.</p>
<p>At <a href="https://2016.us.wordcamp.org/">WordCamp US 2016</a>, <a href="https://wptavern.com/state-of-the-word-2016-mullenweg-pushes-calypso-as-future-of-wordpress-interface-proposes-major-changes-to-release-cycle">the State of Word reported </a>that in 2016 alone there were:</p>
<ul>
<li>116 WordCamps around the world</li>
<li>36,000 attendees</li>
<li>2,056 speakers</li>
<li>1,036 sponsors</li>
<li>750 organizers</li>
</ul>
<p>What makes it even more impressive is that these are events put on by volunteers. Matt Mullenweg also shared that these WordCamps are made possible by the generosity of the various sponsors which cover 85 &#8211; 95% of the costs associated with such events.</p>
<p>It’s because of these sponsors that the costs are kept so low for attendees; including the annual event (WCUS) which came in at a cost greater than $500 per person but sold for ~$20 / day (Total of $40 / person). This is truly a herculean feat, and I commend them on their success to date.</p>
<h1>The Sponsor Canoe Is Leaking</h1>
<a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/Canoes.png?ssl=1"><img class="size-full wp-image-64321" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/Canoes.png?resize=705%2C210&ssl=1" alt="Canoes" /></a>photo credit: dolbinator1000 <a href="http://www.flickr.com/photos/126654539@N08/25305151246">Boyhood</a> &#8211; <a href="https://creativecommons.org/licenses/by/2.0/">(license)</a>
<p>With this in mind, I think it’s fair to say that at the rate things are going we might find ourselves with a problem of scale. While there have been 1k + sponsors in 2016, I would wager that a majority of the money is likely coming from a smaller subset of that group.</p>
<p>Taking this into consideration, unless you’re Automattic, I can’t help but imagine that as a business the ROI question continues to come up as it does for me. This is further compounded by the dramatic increase in the <strong>a)</strong> request for sponsorships (# of camps) and <strong>b)</strong> the economics of the sponsorship itself (the $$ amount).</p>
<p>This makes me think that it’s only a matter of time when the source of funds will be exhausted. Organizations have fiduciary responsibilities to their companies to spend their cash flow wisely, especially in today’s turbulent economic times.</p>
<p>The impacts of this, as highlighted above, are going to be felt (if not already) by those volunteers trying to put on these great WordCamps. This will become exceptionally difficult for new camps, especially those in remote cities and countries.</p>
<h1>Why Do Businesses Sponsor WordCamps?</h1>
<a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2015/09/QuestionmarkSmaller.png?ssl=1"><img class="size-full wp-image-48305" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2015/09/QuestionmarkSmaller.png?resize=650%2C200&ssl=1" alt="Smaller Question mark featured image" /></a>photo credit: <a href="https://www.flickr.com/photos/matthewmcvickar/4380126801/">Matthew McVickar</a> &#8211; <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
<p>There is one common phrase every business that has invested in WordCamps has come to terms with &#8211; <b>sponsorships are done in-kind; expect nothing</b>.<i> I’m not clear how this guidance came to be, whether it was explicitly outlined by the Foundation or guidance that came to be over time. What I do know is that a good number of sponsors are familiar with it. </i></p>
<p>Whether intended or not, allow me to be the first to publicly admit that while we are familiar with the phrase, no one really subscribes to it. The dirty little secret is that every business has some form of an expected ROI. It’s not always financially based, but there is some expectation. Companies sponsor events because there is some vested interest unless we’re talking about a child’s gymnastics or softball team.</p>
<p>ROI takes many different shapes. Allow me to share the ROI as I see it when I look across the spectrum of some of today’s top sponsors (know that these are all my opinions as a third-party observer):</p>
<h3><b>GoDaddy </b></h3>
<p>They sponsor because they need to. When they came into the space two to three years ago, after the changing of the guard they identified the potential in WordPress. They had an image problem; one that couldn’t be fixed remotely. It had to be fixed with boots on the ground.</p>
<p>Building relationships. Sharing experiences. Engaging influencers (do not underestimate the power of influencers). Whatever you might think of the brand today is nothing compared to what it was a few years ago. WordCamps have been a critical piece of their strategy to make this work. Who doesn’t know <a href="https://ifyouwillit.com/about-mendel-kurland/">Mendel Kurland</a>?</p>
<h3><b>SiteGround </b></h3>
<p>When they started to make their big push into the market, they were at every camp giving away free accounts. For them, it wasn’t about the short-term gain as much as the long-term gain. They had everything going against them. They were from Bulgaria working to service the biggest economic market, the US. They were trying to penetrate what many would argue was an already saturated market.</p>
<p>I remember when they first appeared. No one knew them, and yet through their guerrilla marketing tactics, brand ambassadorship, stellar performance with customers, and word-of-mouth referrals, they are a powerhouse in the WP hosting space.</p>
<h3><b>WP Engine</b></h3>
<p>While they exploded through a number of initiatives, I believe that WordCamps and their strategy to engage with the community is what propelled them ahead of their competitors. Their focus wasn’t revenue generation early on. I recall their free accounts campaign. I think it ran for close to two years.</p>
<p>What better combination than to have a freemium-like model where all you have to do is focus on user adoption (oversimplification of course). Your product and support are spot on, you just need more people touching it, more people telling their friends about it. They grew organically and these events made that possible.</p>
<h3><b>Automattic</b></h3>
<p>Honestly, they have no choice but to sponsor. They are the project sponsor by design. They are in many ways tied to the success and continued growth of the platform. They too have their free services that require adoption and user growth, things like Jetpack, Akismet, WooCommerce, and so many others.</p>
<p>Without growth, they are dead solutions. They have to show support for a product that they’ve gone all in on. If they don’t sponsor, why would anyone else? Their fates are intertwined.</p>
<p>And the observations go on. Granted, these are obvious gross oversimplifications, but I share them to highlight what ROI can look like. I also share them to show you what success looks like, and what the DNA of these organizations look like. Most of the scenarios above are built on the idea of “free” or “free-ish” services, with the exception being GoDaddy whose prices are so low you might as well consider them a freemium-like model.</p>
<h1>Measuring the ROI of Events</h1>
<p>What happens if you’re a premium service though? In this scenario, your ROI is no longer about adoption or user growth. Instead you’re now focused on growth in the form of revenue and sales. User adoption will never be as great as the freemium model.</p>
<p>As organizations, we’ve invested a lot of money. There has to be something we’re getting out of this. Only in the WordCamp community have I seen this idea that people will donate not only time, but money, under the assumption that there will be nothing at the end of the tunnel.</p>
<p>I wanted to better understand this myself, and what better place to look for ROI than our own data here at Sucuri.</p>
<p>The data below highlights the period between December 2015 &#8211; June 2016. I encourage other businesses to share their own data to add to the conversation. When speaking to ROI, I looked for measurable attributes first:</p>
<ul>
<li>How many marketing leads were captured?</li>
<li>How many sales leads were captured?</li>
<li>How many of those leads converted to sales?</li>
<li>What kind of exposure did we get via social?</li>
<li>What kind of exposure did we get via backlinks?</li>
</ul>
<p>Perhaps the biggest immeasurable metric being:</p>
<ul>
<li>What kind of brand awareness are you really getting?</li>
</ul>
<p>In the table below, <b>sponsorship</b> is exactly what you’d think, while <b>financial investment</b> implies ancillary costs of getting people there, lodging and eating. It does not include labor, collateral, shipping and other items.</p>
<a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/SucurisWordCampsInvestments.png?ssl=1"><img class="size-full wp-image-64325" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/SucurisWordCampsInvestments.png?resize=996%2C265&ssl=1" alt="Sucuri WordCamp Investments Dec. 2015 - June 2016" /></a>Sucuri&#8217;s WordCamp Investments Dec. 2015 &#8211; June 2016
<p>This chart shows the ROI we got in terms of money (did we close deals?) As a for-profit business one of the many attributes we look at are the total net-new customers we can generate from any investment, including events.</p>
<a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/SucuriCPLCACInvestment.png?ssl=1"><img class="wp-image-64327 size-full" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/SucuriCPLCACInvestment.png?resize=887%2C259&ssl=1" alt="Sucuri Investment CPL/CAC Analysis" /></a>Sucuri Investment CPL/CAC Analysis
<p>To date, from all the events including WordCamp US (2015), we were able to track a total of 13 deals that closed from a direct engagement at the event. Putting the Customer Acquisition Cost (CAC) in the neighborhood of $12.4k per closed lead.</p>
<p>This means that my lifetime value (LTV), if they purchased a basic plan at $199.99 would have to be 45 years. If they purchased our $499.99 plan, we&#8217;d be looking at a 18 year LTV.</p>
<a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/SucuriInvestmentMeasurableROI.png?ssl=1"><img class="size-full wp-image-64328" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/12/SucuriInvestmentMeasurableROI.png?resize=1006%2C165&ssl=1" alt="Sucuri Investment Measurable ROI" /></a>Sucuri Investment Measurable ROI
<p>Focusing on exposure, it is one of the many things you get from sponsoring an event. You get linkbacks from the event, shout outs on the pages, posts highlighting your sponsorship. What does that really amount to? Can it be measured? The easiest way to answer these questions was to look at the main site links and social engagements.</p>
<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/SucuriWebSocialImpact.png?ssl=1"><img class="size-full wp-image-64329" src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/SucuriWebSocialImpact.png?resize=577%2C304&ssl=1" alt="Sucuri Web / Social Sponsorship Impact" /></a>Sucuri Web / Social Sponsorship Impact
<p>We generated 190 sessions total, the most coming from WordCamp US (at the time of the event, not leading up to it, or after). We generate over 500k sessions a month across all our platforms. This makes 190 total sessions over a six month period negligible.</p>
<p>In my review, we looked at direct traffic from referrals and traced down the social <b>&#8220;thank you&#8221;</b> and <b>&#8220;promotions&#8221;</b> each event provided. It&#8217;s fair to note, that the lack of success in the measurable values above could be very closely be related to our ineffectiveness as an organization as well. We could just be really bad at working events; it’s an art in and of itself.</p>
<p>I intentionally did not include marketing leads. For me, my focus is looking at what actually converts so when we go to events, we place more emphasis on qualified sales leads (opportunities) than marketing leads; I am not very big on getting into the card collection and SPAM business.</p>
<p><b>What does this all mean?</b></p>
<p>Well, if I was a rational person this would mean that as a premium service provider, investing in WordCamps doesn’t make sense. Trust me, I love the community. We are involved in many ways, but this is really too difficult to digest and justify. I wonder what happens when more companies, even the ones that I shared above, start doing the same mathematics.</p>
<h1>The WordCamp Sponsorship Conundrum</h1>
<p>The WordPress platform promotes the idea of Free and targets a very curious niche of people &#8211; self-service/Do It Yourself (DIY) types. By this self-proclaimed profile, they are not buyers of premium services; they are the ones that will invest sweat equity to build or find an alternative to their problem &#8211; <b>it just has to be free. </b></p>
<p>This ideology is fine, but it also means that it frankly may not be the right market for most premium businesses. I would be remiss however, if I did not highlight the fact that a number of the sponsors for WCUS 2016 were premium service providers. The only challenge I would make to this claim is that just because they are sponsoring, doesn’t mean they are getting a return.</p>
<p>I’d also challenge it and say some of them have a need to sponsor for some of the same reasons described above. Just because a premium service sponsors, it doesn’t mean their goal is defined purely around selling, in many instances it’s built around brand awareness and ambassadorship &#8211; especially unknown brands, or those with bad reputations. GoDaddy is a perfect example of this.</p>
<p>Does this mean that there is no hope? No, I don’t think so. I just think we have to ask ourselves some key questions, both as organizations and a community. To assist in the conversation, I’ve highlighted a few areas that I find challenging as a business and encourage others to introduce their own. If nothing else, this can help both the Foundation and organizers alike better work with sponsors.</p>
<h2>The Audience Quality Factor</h2>
<p>When we turn our attention to WordCamps, events designed to promote and bring together these ideals, you realize that the problem with WordCamps for businesses is the audience.</p>
<p>I&#8217;m by no way saying that their current design is bad for what WordCamps were designed for. On the contrary, I&#8217;d say they&#8217;ve done an exceptional job sticking to their predefined audience, at least in terms of cost bracket. They don’t, however, do a good job of differentiating between the various personas in attendance. They’re all rolled up into one big bucket. This creates a severe imbalance between the economic investment and audience potential.</p>
<p>This imbalance I think has to do with the quality of the audience. This is not meant to imply that the audience is not good in their own right, but from a company perspective not so much (i.e., as a potential customer). In a world where everything is expected to be free, and quickly commoditized, how do you bridge that divide?</p>
<p>This also has residual effects as well into the quality that can be expected at the event, in terms of organization, presentation and speakers. There are so many different ways this can go, does it mean WordCamp Pro like events? I’m not sure, but what I do know is that in it’s current incarnation something has to give.</p>
<p>Granted, this does not apply to everyone. I know a number of theme shops that bring and meet their customers at these events. Where closing one deal cannot only cover their costs, but set them up nicely for a couple of months.  My points here are more tailored at product / premium shops that are operating at a very different scale and configuration.</p>
<h2>Increasing Number of Events Globally</h2>
<p><a href="https://i0.wp.com/wptavern.com/wp-content/uploads/2013/05/WPWorldLogo.jpg?ssl=1"><img class="alignright size-full wp-image-6948" src="https://i0.wp.com/wptavern.com/wp-content/uploads/2013/05/WPWorldLogo.jpg?resize=200%2C160&ssl=1" alt="WordPress World" /></a>The sheer volume of camps and sponsorships presents a very big problem, not just for the Foundation but for businesses as well. Which ones do you invest in? Which will offer the most return?</p>
<p>I assure you, these are the conversations that are occurring. There are so many, and it’s impossible to invest in them all (at least in a meaningful way). This will continue to put undue pressures on all the organizing teams looking to raise funds. I think you can see an example of this with this years WCUS 2016 sponsorships, a very different (stark) representation of today’s reality when it comes to sponsorships.</p>
<p>Yes, I&#8217;m very familiar with the new Global Sponsorship opportunities the Foundation has put together. They&#8217;re divided by geographic region, and don&#8217;t include the main geographic events like WordCamp US and WordCamp Europe. The prices are below:</p>
<a href="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/GlobalSponsorshipOpportunities.png?ssl=1"><img class="size-full wp-image-64326" src="https://i2.wp.com/wptavern.com/wp-content/uploads/2016/12/GlobalSponsorshipOpportunities.png?resize=730%2C143&ssl=1" alt="Global Sponsorship Prices" /></a>Global Sponsorship Prices
<p>It’s definitely a great idea, but providing a large sum of cash that gets distributed across events that you may or may not attend isn’t something I’m particularly fond of. I worry about the longevity of this program, and while I know there are always new sponsors, what will the churn look like in the program. Only time will tell.</p>
<h2>Impacts of a Corporation Type</h2>
<p>For those unfamiliar, the entity responsible for facilitating the growth and management of WordCamps around the world is now known as the <a href="https://make.wordpress.org/community/2016/03/02/transitioning-to-wordpress-community-support/">“WordPress Community Support (WPCS) Public Benefit Corporation (PBC)”</a>. This new entity is a subsidiary of the WordPress Foundation, which is still a non-profit, and established in 2016 (Yes, Matt said it’d take effect in 2017 but I’m pretty sure that was in error).</p>
<blockquote><p>After March 31, sponsorship payments sent to WordPress Foundation accounts will be returned to sender. Please send <a href="https://make.wordpress.org/community/handbook/wordcamp-organizer-handbook/first-steps/budget-and-finances/running-the-money-through-wpcs/#sponsorship-revenue">revised payment instructions</a> to any sponsors who have not yet paid.</p></blockquote>
<p>This new entity is what is known as a benefit corporation, and should NOT be confused with a b-corp. Although it is used in many instances interchangeably, there are a number of differentiating factors, the biggest being that to obtain a b-corp classification an entity must be certified.</p>
<blockquote><p>B Corps are for-profit companies certified by the nonprofit B Lab to meet rigorous standards of social and environmental performance, accountability, and transparency.</p></blockquote>
<p>Establishing a PBC to handle the WordCamps I firmly believe was done with the best of intentions for the community, but it does present a few challenges for private businesses. A PBC is still a private for-profit company. The biggest difference, however, is that unlike other corporation types (e.g., C, S, etc..) a PBC allows an organization to be a charter (or mission focused) in addition to more traditional goals of generating profits for its shareholders.</p>
<p>This change is a bit more significant than might be implied when reading through <a href="https://make.wordpress.org/community/2016/03/02/transitioning-to-wordpress-community-support/">the announcement</a>. One of the driving forces for the change was to make the sponsorship process easier for both the organizers and sponsors alike:</p>
<blockquote><p>One of the main advantages to the change from the WordPress Foundation (a non-profit) to the WPCS (a public benefit corporation) is that the rules around sponsoring official WordPress events are much simpler.</p>
<p>The people involved in overseeing the program have updated sponsor rules accordingly, to eliminate the barriers to value-adding stuff like direct links, discounts, and calls to action, while keeping the ones that helped us form such a trustworthy, community-focused sponsor program, like the rule about not using superlatives or unprovable claims.</p></blockquote>
<p>As a prior WordCamp organizer, there is perhaps no greater challenge in my mind than asking people for money. While my experience was back in 2011, I can only imagine that the struggles are still the same and one of the things leveraged when pitching to companies are the benefits of a non-profit. The non-profit classification was not just about securing donations like venues (which is very important) but it’s critical for some in securing the dollars they require.</p>
<p>For a company, it also makes it harder to justify the costs. As the dollar investment continues to increase, the one thing that could always be counted on was the non-profit status. By changing it to a private organization (on paper) it’s donating money to another company (regardless of what the mission may or may not be). This might not be a big deal for some, but when we start talking significant investments, it becomes a serious problem.</p>
<h1>Incentivizing Businesses</h1>
<p>When you read through the <a href="https://make.wordpress.org/community/handbook/wordcamp-organizer/planning-details/fundraising/wordcamp-sponsorship/#wordcamp-sponsorship-rules-for-2016">Sponsorship rules for 2016</a> the changes are not incentivizing enough for a business. The biggest change being the ability to print comparisons or introduce pricing on collateral, both of which are insignificant as you can account for most of your physical collateral to end up in the trash and difficult to track.</p>
<p>I believe there will be, or are changes in the works, to include pricing on virtual print as well which will definitely be a positive move, but I defer to the ROI measurements above as well.</p>
<p>While the idea of incentivizing a business might be repulsive, it’s a necessity. As a good friend of mine mentioned, it’s about exposure for businesses. If we’re investing significant dollars and being such pivotal players in the success of these events, then we’re going to ask for as much exposure as possible.</p>
<p>We’re also going to push the limits of our imaginations and require some flexibility, in return I think most companies would willingly be open to negotiation and flexibility. If ROI is going to be based on exposure and brand awareness, we need to be able to capitalize on that.</p>
<p>What might be interesting here is to perhaps do a survey of businesses, those that have been supporting the WordCamp communities for years, and take a poll. Maybe present some options and make them part of the process. Even if it’s a fixed list, maybe ask for a wishlist of things; things that can be discussed and openly taken into consideration.</p>
<p>Like I tell my teams &#8211;<b>most reasonable people don’t need to always win, they just want to be heard and be part of the process.</b> This applies to companies as well. When it comes down to it, it’s but a few people at each organization that will be your evangelists.</p>
<h1>WordCamp Sponsorship Can Work</h1>
<p>I am not saying that sponsoring WordCamps is not valuable. I’m also not saying that it’s a lost cause working with WordCamps.  I am saying that it’s important to have a dialog if longevity is what we’re after in the community,  sponsorships are the bloodline that keep these events going.</p>
<p>There is little that can be done about the growth of events or the new subsidiary (and I don’t think either is bad). They are today’s realities and as organizations we’ll have to work through them independently.</p>
<p>The two areas I think can be improved on is the audience and how businesses are incentivized.</p>
<ul>
<li>I’m not particularly hopeful of the audience, that’s a problem the community will need to solve and not necessarily something the Foundation should concern themselves with. If I were the Foundation, I would be doing exactly what they are doing &#8211;<b> keep the price as low as possible to make it reachable to everyone (need a low barrier to entry). </b>We’ve already seen a few events attempt this, and the best example in my opinion so far has been <a href="https://wooconf.com/">WooConf</a> and <a href="https://wpcampus.org/">WPCampus</a>.</li>
</ul>
<ul>
<li>The one I’m more hopeful of is how businesses are incentivized. If we can agree that at a minimum all organizations are looking for exposure, then that should be the easiest place to start. A few examples might include: speaking guarantees, more prominent branding, access to some form of audience information. Yes, some of these are highly controversial, but I have faith that together we can make something work that is in line with the spirit of these events. I would also encourage other camps to look at <a href="https://2017.miami.wordcamp.org/">WordCamp Miami</a>; beyond  having a Learn JavaScript Deeply track, they do an exceptional job with the way they engage with their sponsors.</li>
</ul>
<p>I share this post as a way to provide a perspective that I hope is unique and valuable. If it starts a discussion, and opens a better dialog between businesses, WordCamp organizers and the Foundation then I will consider it a success. Sponsors are a critical piece to the continued success and growth of these community events, and I’d like to ensure that continues.</p>
<div id="epoch-width-sniffer"></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 08 Dec 2016 04:36:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jeff Chandler";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:49;a:6:{s:4:"data";s:13:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:28:"BuddyPress: BuddyPress 2.7.3";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://buddypress.org/?p=261855";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:48:"https://buddypress.org/2016/12/buddypress-2-7-3/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:756:"<p>BuddyPress 2.7.3 is now available. This is a maintenance release and a recommended upgrade for all BuddyPress installations.</p>
<p>BP 2.7.3 fixes bugs in several components. For more information, see the <a href="https://buddypress.trac.wordpress.org/query?group=status&milestone=2.7.3">2.7.3 milestone</a> on <a>BuddyPress Trac</a>.</p>
<p>Update to BuddyPress 2.7.3 today in your WordPress Dashboard, or by <a href="https://wordpress.org/plugins/buddypress/">downloading from the wordpress.org plugin repository</a>.</p>
<p>Questions or comments? Check out the <a href="https://codex.buddypress.org/releases/version-2-7-3/">2.7.3 changelog</a>, or stop by our <a href="https://buddypress.org/support/">support forums</a> or  <a>Trac</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 07 Dec 2016 23:15:56 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:8:"@mercime";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:"' . "\0" . '*' . "\0" . 'data";a:8:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Mon, 09 Jan 2017 19:24:16 GMT";s:12:"content-type";s:8:"text/xml";s:4:"vary";s:15:"Accept-Encoding";s:13:"last-modified";s:29:"Mon, 09 Jan 2017 19:15:10 GMT";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:11:"HIT lax 250";s:16:"content-encoding";s:4:"gzip";}}s:5:"build";s:14:"20130911040210";}',
                'autoload' => 'no',
            ),
            119 => 
            array (
                'option_id' => 125,
                'option_name' => '_transient_timeout_feed_mod_d117b5738fbd35bd8c0391cda1f2b5d9',
                'option_value' => '1484033055',
                'autoload' => 'no',
            ),
            120 => 
            array (
                'option_id' => 126,
                'option_name' => '_transient_feed_mod_d117b5738fbd35bd8c0391cda1f2b5d9',
                'option_value' => '1483989855',
                'autoload' => 'no',
            ),
            121 => 
            array (
                'option_id' => 127,
                'option_name' => '_transient_timeout_feed_b9388c83948825c1edaef0d856b7b109',
                'option_value' => '1484033056',
                'autoload' => 'no',
            ),
            122 => 
            array (
                'option_id' => 128,
                'option_name' => '_transient_feed_b9388c83948825c1edaef0d856b7b109',
                'option_value' => 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"

";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:117:"







































";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:34:"WordPress Plugins » View: Popular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:45:"https://wordpress.org/plugins/browse/popular/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:34:"WordPress Plugins » View: Popular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"am";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 09 Jan 2017 19:22:47 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:25:"http://bbpress.org/?v=1.1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:30:{i:0;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"https://wordpress.org/plugins/hello-dolly/#post-5790";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 29 May 2008 22:11:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"5790@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:150:"This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/plugins/woocommerce/#post-29860";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 Sep 2011 08:13:36 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"29860@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:97:"WooCommerce is a powerful, extendable eCommerce plugin that helps you sell anything. Beautifully.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"WooThemes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpress.org/plugins/siteorigin-panels/#post-51888";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 11 Apr 2013 10:36:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"51888@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:111:"Build responsive page layouts using the widgets you know and love using this simple drag and drop page builder.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Greg Priday";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:54:"https://wordpress.org/plugins/wordpress-seo/#post-8321";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 Jan 2009 20:34:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"8321@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:118:"Improve your WordPress SEO: Write better content and have a fully optimized WordPress site using the Yoast SEO plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Joost de Valk";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/wordpress-importer/#post-18101";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 May 2010 17:42:45 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"18101@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"Import posts, pages, comments, custom fields, categories, tags and more from a WordPress export file.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Brian Colinger";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/wp-super-cache/#post-2572";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 Nov 2007 11:40:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2572@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:73:"A very fast caching engine for WordPress that produces static html files.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Donncha O Caoimh";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/plugins/w3-total-cache/#post-12073";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 29 Jul 2009 18:46:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"12073@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:144:"Search Engine (SEO) &#38; Performance Optimization (WPO) via caching. Integrated caching: CDN, Minify, Page, Object, Fragment, Database support.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Frederick Townes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"https://wordpress.org/plugins/regenerate-thumbnails/#post-6743";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 23 Aug 2008 14:38:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"6743@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:76:"Allows you to regenerate your thumbnails after changing the thumbnail sizes.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:25:"Alex Mills (Viper007Bond)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://wordpress.org/plugins/tinymce-advanced/#post-2082";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 27 Jun 2007 15:00:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2082@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:58:"Extends and enhances TinyMCE, the WordPress Visual Editor.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Andrew Ozz";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/plugins/nextgen-gallery/#post-1169";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 23 Apr 2007 20:08:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"1169@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:121:"The most popular WordPress gallery plugin and one of the most popular plugins of all time with over 16 million downloads.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Alex Rabe";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/contact-form-7/#post-2141";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 02 Aug 2007 12:45:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2141@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:54:"Just another contact form plugin. Simple but flexible.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Takayuki Miyoshi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"https://wordpress.org/plugins/google-sitemap-generator/#post-132";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 22:31:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"132@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:105:"This plugin will generate a special XML sitemap which will help search engines to better index your blog.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Arne Brachhold";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"https://wordpress.org/plugins/really-simple-captcha/#post-9542";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 09 Mar 2009 02:17:35 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"9542@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:138:"Really Simple CAPTCHA is a CAPTCHA module intended to be called from other plugins. It is originally created for my Contact Form 7 plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Takayuki Miyoshi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"https://wordpress.org/plugins/advanced-custom-fields/#post-25254";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 17 Mar 2011 04:07:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"25254@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:68:"Customise WordPress with powerful, professional and intuitive fields";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"elliotcondon";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpress.org/plugins/all-in-one-seo-pack/#post-753";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 30 Mar 2007 20:08:18 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"753@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:150:"One of the most downloaded WordPress plugins (over 30 million downloads since 2007). Use All in One SEO Pack to optimize your site for Search Engines.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:8:"uberdose";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:48:"https://wordpress.org/plugins/wpclef/#post-47509";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 Dec 2012 01:25:57 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"47509@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:139:"Modern two-factor that people love to use: strong authentication without passwords or tokens; single sign on/off; magical login experience.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Dave Ross";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/duplicate-post/#post-2646";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 05 Dec 2007 17:40:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2646@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:22:"Clone posts and pages.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Lopo";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:49:"https://wordpress.org/plugins/jetpack/#post-23862";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 Jan 2011 02:21:38 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"23862@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:107:"Increase your traffic, view your stats, speed up your site, and protect yourself from hackers with Jetpack.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Automattic";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://wordpress.org/plugins/wordfence/#post-29832";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 04 Sep 2011 03:13:51 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"29832@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:149:"Secure your website with the most comprehensive WordPress security plugin. Firewall, malware scan, blocking, live traffic, login security &#38; more.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Wordfence";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://wordpress.org/plugins/wp-pagenavi/#post-363";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 23:17:57 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"363@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:49:"Adds a more advanced paging navigation interface.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Lester Chan";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:46:"https://wordpress.org/plugins/akismet/#post-15";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 22:11:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"15@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:98:"Akismet checks your comments against the Akismet Web service to see if they look like spam or not.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:71:"https://wordpress.org/plugins/google-analytics-for-wordpress/#post-2316";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 14 Sep 2007 12:15:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2316@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:113:"Connect Google Analytics with WordPress by adding your Google Analytics tracking code. Get the stats that matter.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Syed Balkhi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/plugins/updraftplus/#post-38058";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 21 May 2012 15:14:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"38058@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:148:"Backup and restoration made easy. Complete backups; manual or scheduled (backup to S3, Dropbox, Google Drive, Rackspace, FTP, SFTP, email + others).";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"David Anderson";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:75:"https://wordpress.org/plugins/google-analytics-dashboard-for-wp/#post-50539";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 10 Mar 2013 17:07:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"50539@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:127:"Displays Google Analytics reports in your WordPress Dashboard. Inserts the latest Google Analytics tracking code in your pages.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Alin Marcu";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wordpress.org/plugins/disable-comments/#post-26907";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 27 May 2011 04:42:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"26907@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:150:"Allows administrators to globally disable comments on their site. Comments can be disabled according to post type. Multisite friendly. Provides tool t";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Samir Shah";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"https://wordpress.org/plugins/duplicator/#post-26607";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 16 May 2011 12:15:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"26607@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:88:"Duplicate, clone, backup, move and transfer an entire site from one location to another.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Cory Lamle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/wp-multibyte-patch/#post-28395";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Jul 2011 12:22:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"28395@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:71:"Multibyte functionality enhancement for the WordPress Japanese package.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"plugin-master";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:69:"https://wordpress.org/plugins/black-studio-tinymce-widget/#post-31973";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 10 Nov 2011 15:06:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"31973@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:39:"The visual editor widget for Wordpress.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Marco Chiesi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/better-wp-security/#post-21738";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 22 Oct 2010 22:06:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"21738@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:146:"Take the guesswork out of WordPress security. iThemes Security offers 30+ ways to lock down WordPress in an easy-to-use WordPress security plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"iThemes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:30:"






";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"SiteOrigin Widgets Bundle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpress.org/plugins/so-widgets-bundle/#post-67824";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 24 May 2014 14:27:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"67824@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:128:"A collection of all widgets, neatly bundled into a single plugin. It&#039;s also a framework to code your own widgets on top of.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Greg Priday";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:46:"https://wordpress.org/plugins/rss/view/popular";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:"' . "\0" . '*' . "\0" . 'data";a:12:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Mon, 09 Jan 2017 19:24:17 GMT";s:12:"content-type";s:23:"text/xml; charset=UTF-8";s:4:"vary";s:15:"Accept-Encoding";s:25:"strict-transport-security";s:11:"max-age=360";s:7:"expires";s:29:"Mon, 09 Jan 2017 19:57:47 GMT";s:13:"cache-control";s:0:"";s:6:"pragma";s:0:"";s:13:"last-modified";s:31:"Mon, 09 Jan 2017 19:22:47 +0000";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:11:"HIT lax 249";s:16:"content-encoding";s:4:"gzip";}}s:5:"build";s:14:"20130911040210";}',
                'autoload' => 'no',
            ),
            123 => 
            array (
                'option_id' => 129,
                'option_name' => '_transient_timeout_feed_mod_b9388c83948825c1edaef0d856b7b109',
                'option_value' => '1484033056',
                'autoload' => 'no',
            ),
            124 => 
            array (
                'option_id' => 130,
                'option_name' => '_transient_feed_mod_b9388c83948825c1edaef0d856b7b109',
                'option_value' => '1483989856',
                'autoload' => 'no',
            ),
            125 => 
            array (
                'option_id' => 131,
                'option_name' => '_transient_timeout_plugin_slugs',
                'option_value' => '1484076256',
                'autoload' => 'no',
            ),
            126 => 
            array (
                'option_id' => 132,
                'option_name' => '_transient_plugin_slugs',
                'option_value' => 'a:2:{i:0;s:19:"akismet/akismet.php";i:1;s:9:"hello.php";}',
                'autoload' => 'no',
            ),
            127 => 
            array (
                'option_id' => 133,
                'option_name' => '_transient_timeout_dash_88ae138922fe95674369b1cb3d215a2b',
                'option_value' => '1484033056',
                'autoload' => 'no',
            ),
            128 => 
            array (
                'option_id' => 134,
                'option_name' => '_transient_dash_88ae138922fe95674369b1cb3d215a2b',
            'option_value' => '<div class="rss-widget"><ul><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2016/12/vaughan/\'>WordPress 4.7 “Vaughan”</a> <span class="rss-date">December 6, 2016</span><div class="rssSummary">Version 4.7 of WordPress, named “Vaughan” in honor of legendary jazz vocalist Sarah &quot;Sassy&quot; Vaughan, is available for download or update in your WordPress dashboard. New features in 4.7 help you get your site set up the way you want it.</div></li></ul></div><div class="rss-widget"><ul><li><a class=\'rsswidget\' href=\'https://wptavern.com/how-laravel-forge-can-help-you-run-wordpress-in-the-cloud\'>WPTavern: How Laravel Forge Can Help You Run WordPress in the Cloud</a></li><li><a class=\'rsswidget\' href=\'https://poststatus.com/contributing-to-twenty-seventeen-theme/\'>Post Status: Contributing to Twenty Seventeen</a></li><li><a class=\'rsswidget\' href=\'https://wptavern.com/lets-encrypt-passes-20-million-active-certificates-in-2016\'>WPTavern: Let’s Encrypt Passes 20 Million Active Certificates in 2016</a></li></ul></div><div class="rss-widget"><ul><li class="dashboard-news-plugin"><span>Popular Plugin:</span> SiteOrigin Widgets Bundle&nbsp;<a href="plugin-install.php?tab=plugin-information&amp;plugin=updraftplus&amp;_wpnonce=e2a3997b84&amp;TB_iframe=true&amp;width=600&amp;height=800" class="thickbox open-plugin-details-modal" aria-label="Install SiteOrigin Widgets Bundle">(Install)</a></li></ul></div>',
                'autoload' => 'no',
            ),
            129 => 
            array (
                'option_id' => 135,
                'option_name' => '_site_transient_timeout_available_translations',
                'option_value' => '1484009231',
                'autoload' => 'no',
            ),
            130 => 
            array (
                'option_id' => 136,
                'option_name' => '_site_transient_available_translations',
            'option_value' => 'a:90:{s:2:"af";a:8:{s:8:"language";s:2:"af";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-09 16:12:38";s:12:"english_name";s:9:"Afrikaans";s:11:"native_name";s:9:"Afrikaans";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/af.zip";s:3:"iso";a:2:{i:1;s:2:"af";i:2;s:3:"afr";}s:7:"strings";a:1:{s:8:"continue";s:10:"Gaan voort";}}s:2:"ar";a:8:{s:8:"language";s:2:"ar";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 12:56:13";s:12:"english_name";s:6:"Arabic";s:11:"native_name";s:14:"العربية";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/ar.zip";s:3:"iso";a:2:{i:1;s:2:"ar";i:2;s:3:"ara";}s:7:"strings";a:1:{s:8:"continue";s:16:"المتابعة";}}s:3:"ary";a:8:{s:8:"language";s:3:"ary";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 19:24:17";s:12:"english_name";s:15:"Moroccan Arabic";s:11:"native_name";s:31:"العربية المغربية";s:7:"package";s:60:"https://downloads.wordpress.org/translation/core/4.7/ary.zip";s:3:"iso";a:2:{i:1;s:2:"ar";i:3;s:3:"ary";}s:7:"strings";a:1:{s:8:"continue";s:16:"المتابعة";}}s:2:"az";a:8:{s:8:"language";s:2:"az";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-29 08:38:56";s:12:"english_name";s:11:"Azerbaijani";s:11:"native_name";s:16:"Azərbaycan dili";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/az.zip";s:3:"iso";a:2:{i:1;s:2:"az";i:2;s:3:"aze";}s:7:"strings";a:1:{s:8:"continue";s:5:"Davam";}}s:3:"azb";a:8:{s:8:"language";s:3:"azb";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-12-11 22:42:10";s:12:"english_name";s:17:"South Azerbaijani";s:11:"native_name";s:29:"گؤنئی آذربایجان";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.4.2/azb.zip";s:3:"iso";a:2:{i:1;s:2:"az";i:3;s:3:"azb";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"bg_BG";a:8:{s:8:"language";s:5:"bg_BG";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-07 08:41:41";s:12:"english_name";s:9:"Bulgarian";s:11:"native_name";s:18:"Български";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/bg_BG.zip";s:3:"iso";a:2:{i:1;s:2:"bg";i:2;s:3:"bul";}s:7:"strings";a:1:{s:8:"continue";s:12:"Напред";}}s:5:"bn_BD";a:8:{s:8:"language";s:5:"bn_BD";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-10-20 16:53:20";s:12:"english_name";s:7:"Bengali";s:11:"native_name";s:15:"বাংলা";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/bn_BD.zip";s:3:"iso";a:1:{i:1;s:2:"bn";}s:7:"strings";a:1:{s:8:"continue";s:23:"এগিয়ে চল.";}}s:2:"bo";a:8:{s:8:"language";s:2:"bo";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-05 09:44:12";s:12:"english_name";s:7:"Tibetan";s:11:"native_name";s:21:"བོད་ཡིག";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/bo.zip";s:3:"iso";a:2:{i:1;s:2:"bo";i:2;s:3:"tib";}s:7:"strings";a:1:{s:8:"continue";s:24:"མུ་མཐུད།";}}s:5:"bs_BA";a:8:{s:8:"language";s:5:"bs_BA";s:7:"version";s:5:"4.5.4";s:7:"updated";s:19:"2016-04-19 23:16:37";s:12:"english_name";s:7:"Bosnian";s:11:"native_name";s:8:"Bosanski";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.5.4/bs_BA.zip";s:3:"iso";a:2:{i:1;s:2:"bs";i:2;s:3:"bos";}s:7:"strings";a:1:{s:8:"continue";s:7:"Nastavi";}}s:2:"ca";a:8:{s:8:"language";s:2:"ca";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-05 11:04:39";s:12:"english_name";s:7:"Catalan";s:11:"native_name";s:7:"Català";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/ca.zip";s:3:"iso";a:2:{i:1;s:2:"ca";i:2;s:3:"cat";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continua";}}s:3:"ceb";a:8:{s:8:"language";s:3:"ceb";s:7:"version";s:5:"4.4.3";s:7:"updated";s:19:"2016-02-16 15:34:57";s:12:"english_name";s:7:"Cebuano";s:11:"native_name";s:7:"Cebuano";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.4.3/ceb.zip";s:3:"iso";a:2:{i:2;s:3:"ceb";i:3;s:3:"ceb";}s:7:"strings";a:1:{s:8:"continue";s:7:"Padayun";}}s:5:"cs_CZ";a:8:{s:8:"language";s:5:"cs_CZ";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2016-02-11 18:32:36";s:12:"english_name";s:5:"Czech";s:11:"native_name";s:12:"Čeština‎";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.4.2/cs_CZ.zip";s:3:"iso";a:2:{i:1;s:2:"cs";i:2;s:3:"ces";}s:7:"strings";a:1:{s:8:"continue";s:11:"Pokračovat";}}s:2:"cy";a:8:{s:8:"language";s:2:"cy";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-05 11:08:55";s:12:"english_name";s:5:"Welsh";s:11:"native_name";s:7:"Cymraeg";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/cy.zip";s:3:"iso";a:2:{i:1;s:2:"cy";i:2;s:3:"cym";}s:7:"strings";a:1:{s:8:"continue";s:6:"Parhau";}}s:5:"da_DK";a:8:{s:8:"language";s:5:"da_DK";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 11:33:59";s:12:"english_name";s:6:"Danish";s:11:"native_name";s:5:"Dansk";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/da_DK.zip";s:3:"iso";a:2:{i:1;s:2:"da";i:2;s:3:"dan";}s:7:"strings";a:1:{s:8:"continue";s:12:"Forts&#230;t";}}s:5:"de_CH";a:8:{s:8:"language";s:5:"de_CH";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 15:48:14";s:12:"english_name";s:20:"German (Switzerland)";s:11:"native_name";s:17:"Deutsch (Schweiz)";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/de_CH.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:5:"de_DE";a:8:{s:8:"language";s:5:"de_DE";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-21 21:24:48";s:12:"english_name";s:6:"German";s:11:"native_name";s:7:"Deutsch";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/de_DE.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:14:"de_CH_informal";a:8:{s:8:"language";s:14:"de_CH_informal";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 15:44:48";s:12:"english_name";s:30:"German (Switzerland, Informal)";s:11:"native_name";s:21:"Deutsch (Schweiz, Du)";s:7:"package";s:71:"https://downloads.wordpress.org/translation/core/4.7/de_CH_informal.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:12:"de_DE_formal";a:8:{s:8:"language";s:12:"de_DE_formal";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-21 21:25:23";s:12:"english_name";s:15:"German (Formal)";s:11:"native_name";s:13:"Deutsch (Sie)";s:7:"package";s:69:"https://downloads.wordpress.org/translation/core/4.7/de_DE_formal.zip";s:3:"iso";a:1:{i:1;s:2:"de";}s:7:"strings";a:1:{s:8:"continue";s:6:"Weiter";}}s:2:"el";a:8:{s:8:"language";s:2:"el";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-06 20:04:40";s:12:"english_name";s:5:"Greek";s:11:"native_name";s:16:"Ελληνικά";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/el.zip";s:3:"iso";a:2:{i:1;s:2:"el";i:2;s:3:"ell";}s:7:"strings";a:1:{s:8:"continue";s:16:"Συνέχεια";}}s:5:"en_NZ";a:8:{s:8:"language";s:5:"en_NZ";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-15 04:56:31";s:12:"english_name";s:21:"English (New Zealand)";s:11:"native_name";s:21:"English (New Zealand)";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/en_NZ.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_GB";a:8:{s:8:"language";s:5:"en_GB";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-11 18:03:11";s:12:"english_name";s:12:"English (UK)";s:11:"native_name";s:12:"English (UK)";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/en_GB.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_ZA";a:8:{s:8:"language";s:5:"en_ZA";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-05 08:11:17";s:12:"english_name";s:22:"English (South Africa)";s:11:"native_name";s:22:"English (South Africa)";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/en_ZA.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_CA";a:8:{s:8:"language";s:5:"en_CA";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 00:34:14";s:12:"english_name";s:16:"English (Canada)";s:11:"native_name";s:16:"English (Canada)";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/en_CA.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:5:"en_AU";a:8:{s:8:"language";s:5:"en_AU";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-03 23:03:48";s:12:"english_name";s:19:"English (Australia)";s:11:"native_name";s:19:"English (Australia)";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/en_AU.zip";s:3:"iso";a:3:{i:1;s:2:"en";i:2;s:3:"eng";i:3;s:3:"eng";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continue";}}s:2:"eo";a:8:{s:8:"language";s:2:"eo";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-04 17:16:39";s:12:"english_name";s:9:"Esperanto";s:11:"native_name";s:9:"Esperanto";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/eo.zip";s:3:"iso";a:2:{i:1;s:2:"eo";i:2;s:3:"epo";}s:7:"strings";a:1:{s:8:"continue";s:8:"Daŭrigi";}}s:5:"es_GT";a:8:{s:8:"language";s:5:"es_GT";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-07 12:13:31";s:12:"english_name";s:19:"Spanish (Guatemala)";s:11:"native_name";s:21:"Español de Guatemala";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/es_GT.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_ES";a:8:{s:8:"language";s:5:"es_ES";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-04 18:02:43";s:12:"english_name";s:15:"Spanish (Spain)";s:11:"native_name";s:8:"Español";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/es_ES.zip";s:3:"iso";a:1:{i:1;s:2:"es";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_AR";a:8:{s:8:"language";s:5:"es_AR";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-24 20:30:13";s:12:"english_name";s:19:"Spanish (Argentina)";s:11:"native_name";s:21:"Español de Argentina";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/es_AR.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CO";a:8:{s:8:"language";s:5:"es_CO";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-25 22:19:36";s:12:"english_name";s:18:"Spanish (Colombia)";s:11:"native_name";s:20:"Español de Colombia";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/es_CO.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_VE";a:8:{s:8:"language";s:5:"es_VE";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-03 12:46:56";s:12:"english_name";s:19:"Spanish (Venezuela)";s:11:"native_name";s:21:"Español de Venezuela";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/es_VE.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_CL";a:8:{s:8:"language";s:5:"es_CL";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-17 22:11:44";s:12:"english_name";s:15:"Spanish (Chile)";s:11:"native_name";s:17:"Español de Chile";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_CL.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_PE";a:8:{s:8:"language";s:5:"es_PE";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-09 09:36:22";s:12:"english_name";s:14:"Spanish (Peru)";s:11:"native_name";s:17:"Español de Perú";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/es_PE.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"es_MX";a:8:{s:8:"language";s:5:"es_MX";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-05 22:19:40";s:12:"english_name";s:16:"Spanish (Mexico)";s:11:"native_name";s:19:"Español de México";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/es_MX.zip";s:3:"iso";a:2:{i:1;s:2:"es";i:2;s:3:"spa";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:2:"et";a:8:{s:8:"language";s:2:"et";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-10-22 16:41:36";s:12:"english_name";s:8:"Estonian";s:11:"native_name";s:5:"Eesti";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/et.zip";s:3:"iso";a:2:{i:1;s:2:"et";i:2;s:3:"est";}s:7:"strings";a:1:{s:8:"continue";s:6:"Jätka";}}s:2:"eu";a:8:{s:8:"language";s:2:"eu";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-07 18:34:12";s:12:"english_name";s:6:"Basque";s:11:"native_name";s:7:"Euskara";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/eu.zip";s:3:"iso";a:2:{i:1;s:2:"eu";i:2;s:3:"eus";}s:7:"strings";a:1:{s:8:"continue";s:8:"Jarraitu";}}s:5:"fa_IR";a:8:{s:8:"language";s:5:"fa_IR";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-06 14:20:49";s:12:"english_name";s:7:"Persian";s:11:"native_name";s:10:"فارسی";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/fa_IR.zip";s:3:"iso";a:2:{i:1;s:2:"fa";i:2;s:3:"fas";}s:7:"strings";a:1:{s:8:"continue";s:10:"ادامه";}}s:2:"fi";a:8:{s:8:"language";s:2:"fi";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 18:04:09";s:12:"english_name";s:7:"Finnish";s:11:"native_name";s:5:"Suomi";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/fi.zip";s:3:"iso";a:2:{i:1;s:2:"fi";i:2;s:3:"fin";}s:7:"strings";a:1:{s:8:"continue";s:5:"Jatka";}}s:5:"fr_CA";a:8:{s:8:"language";s:5:"fr_CA";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-10 17:48:28";s:12:"english_name";s:15:"French (Canada)";s:11:"native_name";s:19:"Français du Canada";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/fr_CA.zip";s:3:"iso";a:2:{i:1;s:2:"fr";i:2;s:3:"fra";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:5:"fr_BE";a:8:{s:8:"language";s:5:"fr_BE";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-09 16:11:01";s:12:"english_name";s:16:"French (Belgium)";s:11:"native_name";s:21:"Français de Belgique";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/fr_BE.zip";s:3:"iso";a:2:{i:1;s:2:"fr";i:2;s:3:"fra";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:5:"fr_FR";a:8:{s:8:"language";s:5:"fr_FR";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-09 16:14:48";s:12:"english_name";s:15:"French (France)";s:11:"native_name";s:9:"Français";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/fr_FR.zip";s:3:"iso";a:1:{i:1;s:2:"fr";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuer";}}s:2:"gd";a:8:{s:8:"language";s:2:"gd";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-08-23 17:41:37";s:12:"english_name";s:15:"Scottish Gaelic";s:11:"native_name";s:9:"Gàidhlig";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/gd.zip";s:3:"iso";a:3:{i:1;s:2:"gd";i:2;s:3:"gla";i:3;s:3:"gla";}s:7:"strings";a:1:{s:8:"continue";s:15:"Lean air adhart";}}s:5:"gl_ES";a:8:{s:8:"language";s:5:"gl_ES";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-04 01:43:25";s:12:"english_name";s:8:"Galician";s:11:"native_name";s:6:"Galego";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/gl_ES.zip";s:3:"iso";a:2:{i:1;s:2:"gl";i:2;s:3:"glg";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:2:"gu";a:8:{s:8:"language";s:2:"gu";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 21:13:09";s:12:"english_name";s:8:"Gujarati";s:11:"native_name";s:21:"ગુજરાતી";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/gu.zip";s:3:"iso";a:2:{i:1;s:2:"gu";i:2;s:3:"guj";}s:7:"strings";a:1:{s:8:"continue";s:31:"ચાલુ રાખવું";}}s:3:"haz";a:8:{s:8:"language";s:3:"haz";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-12-05 00:59:09";s:12:"english_name";s:8:"Hazaragi";s:11:"native_name";s:15:"هزاره گی";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.4.2/haz.zip";s:3:"iso";a:1:{i:3;s:3:"haz";}s:7:"strings";a:1:{s:8:"continue";s:10:"ادامه";}}s:5:"he_IL";a:8:{s:8:"language";s:5:"he_IL";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-08 02:27:42";s:12:"english_name";s:6:"Hebrew";s:11:"native_name";s:16:"עִבְרִית";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/he_IL.zip";s:3:"iso";a:1:{i:1;s:2:"he";}s:7:"strings";a:1:{s:8:"continue";s:8:"המשך";}}s:5:"hi_IN";a:8:{s:8:"language";s:5:"hi_IN";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-17 12:35:49";s:12:"english_name";s:5:"Hindi";s:11:"native_name";s:18:"हिन्दी";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/hi_IN.zip";s:3:"iso";a:2:{i:1;s:2:"hi";i:2;s:3:"hin";}s:7:"strings";a:1:{s:8:"continue";s:12:"जारी";}}s:2:"hr";a:8:{s:8:"language";s:2:"hr";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-25 23:06:52";s:12:"english_name";s:8:"Croatian";s:11:"native_name";s:8:"Hrvatski";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/hr.zip";s:3:"iso";a:2:{i:1;s:2:"hr";i:2;s:3:"hrv";}s:7:"strings";a:1:{s:8:"continue";s:7:"Nastavi";}}s:5:"hu_HU";a:8:{s:8:"language";s:5:"hu_HU";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-12-06 20:18:25";s:12:"english_name";s:9:"Hungarian";s:11:"native_name";s:6:"Magyar";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/hu_HU.zip";s:3:"iso";a:2:{i:1;s:2:"hu";i:2;s:3:"hun";}s:7:"strings";a:1:{s:8:"continue";s:10:"Folytatás";}}s:2:"hy";a:8:{s:8:"language";s:2:"hy";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2016-02-04 07:13:54";s:12:"english_name";s:8:"Armenian";s:11:"native_name";s:14:"Հայերեն";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.4.2/hy.zip";s:3:"iso";a:2:{i:1;s:2:"hy";i:2;s:3:"hye";}s:7:"strings";a:1:{s:8:"continue";s:20:"Շարունակել";}}s:5:"id_ID";a:8:{s:8:"language";s:5:"id_ID";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-09 08:11:02";s:12:"english_name";s:10:"Indonesian";s:11:"native_name";s:16:"Bahasa Indonesia";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/id_ID.zip";s:3:"iso";a:2:{i:1;s:2:"id";i:2;s:3:"ind";}s:7:"strings";a:1:{s:8:"continue";s:9:"Lanjutkan";}}s:5:"is_IS";a:8:{s:8:"language";s:5:"is_IS";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-31 11:00:19";s:12:"english_name";s:9:"Icelandic";s:11:"native_name";s:9:"Íslenska";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/is_IS.zip";s:3:"iso";a:2:{i:1;s:2:"is";i:2;s:3:"isl";}s:7:"strings";a:1:{s:8:"continue";s:6:"Áfram";}}s:5:"it_IT";a:8:{s:8:"language";s:5:"it_IT";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-05 15:13:56";s:12:"english_name";s:7:"Italian";s:11:"native_name";s:8:"Italiano";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/it_IT.zip";s:3:"iso";a:2:{i:1;s:2:"it";i:2;s:3:"ita";}s:7:"strings";a:1:{s:8:"continue";s:8:"Continua";}}s:2:"ja";a:8:{s:8:"language";s:2:"ja";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-05 13:03:24";s:12:"english_name";s:8:"Japanese";s:11:"native_name";s:9:"日本語";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/ja.zip";s:3:"iso";a:1:{i:1;s:2:"ja";}s:7:"strings";a:1:{s:8:"continue";s:9:"続ける";}}s:5:"ka_GE";a:8:{s:8:"language";s:5:"ka_GE";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-03 10:10:56";s:12:"english_name";s:8:"Georgian";s:11:"native_name";s:21:"ქართული";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/ka_GE.zip";s:3:"iso";a:2:{i:1;s:2:"ka";i:2;s:3:"kat";}s:7:"strings";a:1:{s:8:"continue";s:30:"გაგრძელება";}}s:5:"ko_KR";a:8:{s:8:"language";s:5:"ko_KR";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-11 11:21:27";s:12:"english_name";s:6:"Korean";s:11:"native_name";s:9:"한국어";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/ko_KR.zip";s:3:"iso";a:2:{i:1;s:2:"ko";i:2;s:3:"kor";}s:7:"strings";a:1:{s:8:"continue";s:6:"계속";}}s:5:"lt_LT";a:8:{s:8:"language";s:5:"lt_LT";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 12:39:15";s:12:"english_name";s:10:"Lithuanian";s:11:"native_name";s:15:"Lietuvių kalba";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/lt_LT.zip";s:3:"iso";a:2:{i:1;s:2:"lt";i:2;s:3:"lit";}s:7:"strings";a:1:{s:8:"continue";s:6:"Tęsti";}}s:2:"lv";a:8:{s:8:"language";s:2:"lv";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 06:17:03";s:12:"english_name";s:7:"Latvian";s:11:"native_name";s:16:"Latviešu valoda";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/lv.zip";s:3:"iso";a:2:{i:1;s:2:"lv";i:2;s:3:"lav";}s:7:"strings";a:1:{s:8:"continue";s:9:"Turpināt";}}s:5:"mk_MK";a:8:{s:8:"language";s:5:"mk_MK";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-23 09:02:10";s:12:"english_name";s:10:"Macedonian";s:11:"native_name";s:31:"Македонски јазик";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/mk_MK.zip";s:3:"iso";a:2:{i:1;s:2:"mk";i:2;s:3:"mkd";}s:7:"strings";a:1:{s:8:"continue";s:16:"Продолжи";}}s:2:"mr";a:8:{s:8:"language";s:2:"mr";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-11 08:51:51";s:12:"english_name";s:7:"Marathi";s:11:"native_name";s:15:"मराठी";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/mr.zip";s:3:"iso";a:2:{i:1;s:2:"mr";i:2;s:3:"mar";}s:7:"strings";a:1:{s:8:"continue";s:25:"सुरु ठेवा";}}s:5:"ms_MY";a:8:{s:8:"language";s:5:"ms_MY";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-09 14:23:37";s:12:"english_name";s:5:"Malay";s:11:"native_name";s:13:"Bahasa Melayu";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/ms_MY.zip";s:3:"iso";a:2:{i:1;s:2:"ms";i:2;s:3:"msa";}s:7:"strings";a:1:{s:8:"continue";s:8:"Teruskan";}}s:5:"my_MM";a:8:{s:8:"language";s:5:"my_MM";s:7:"version";s:6:"4.1.13";s:7:"updated";s:19:"2015-03-26 15:57:42";s:12:"english_name";s:17:"Myanmar (Burmese)";s:11:"native_name";s:15:"ဗမာစာ";s:7:"package";s:65:"https://downloads.wordpress.org/translation/core/4.1.13/my_MM.zip";s:3:"iso";a:2:{i:1;s:2:"my";i:2;s:3:"mya";}s:7:"strings";a:1:{s:8:"continue";s:54:"ဆက်လက်လုပ်ဆောင်ပါ။";}}s:5:"nb_NO";a:8:{s:8:"language";s:5:"nb_NO";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-20 09:00:07";s:12:"english_name";s:19:"Norwegian (Bokmål)";s:11:"native_name";s:13:"Norsk bokmål";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/nb_NO.zip";s:3:"iso";a:2:{i:1;s:2:"nb";i:2;s:3:"nob";}s:7:"strings";a:1:{s:8:"continue";s:8:"Fortsett";}}s:5:"nl_BE";a:8:{s:8:"language";s:5:"nl_BE";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-09 07:51:07";s:12:"english_name";s:15:"Dutch (Belgium)";s:11:"native_name";s:20:"Nederlands (België)";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/nl_BE.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:5:"nl_NL";a:8:{s:8:"language";s:5:"nl_NL";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-08 18:37:21";s:12:"english_name";s:5:"Dutch";s:11:"native_name";s:10:"Nederlands";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/nl_NL.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:12:"nl_NL_formal";a:8:{s:8:"language";s:12:"nl_NL_formal";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-10-14 13:24:10";s:12:"english_name";s:14:"Dutch (Formal)";s:11:"native_name";s:20:"Nederlands (Formeel)";s:7:"package";s:71:"https://downloads.wordpress.org/translation/core/4.6.1/nl_NL_formal.zip";s:3:"iso";a:2:{i:1;s:2:"nl";i:2;s:3:"nld";}s:7:"strings";a:1:{s:8:"continue";s:8:"Doorgaan";}}s:5:"nn_NO";a:8:{s:8:"language";s:5:"nn_NO";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-21 12:56:58";s:12:"english_name";s:19:"Norwegian (Nynorsk)";s:11:"native_name";s:13:"Norsk nynorsk";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/nn_NO.zip";s:3:"iso";a:2:{i:1;s:2:"nn";i:2;s:3:"nno";}s:7:"strings";a:1:{s:8:"continue";s:9:"Hald fram";}}s:3:"oci";a:8:{s:8:"language";s:3:"oci";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-23 13:45:11";s:12:"english_name";s:7:"Occitan";s:11:"native_name";s:7:"Occitan";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.6.1/oci.zip";s:3:"iso";a:2:{i:1;s:2:"oc";i:2;s:3:"oci";}s:7:"strings";a:1:{s:8:"continue";s:9:"Contunhar";}}s:5:"pl_PL";a:8:{s:8:"language";s:5:"pl_PL";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-06 20:27:29";s:12:"english_name";s:6:"Polish";s:11:"native_name";s:6:"Polski";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/pl_PL.zip";s:3:"iso";a:2:{i:1;s:2:"pl";i:2;s:3:"pol";}s:7:"strings";a:1:{s:8:"continue";s:9:"Kontynuuj";}}s:2:"ps";a:8:{s:8:"language";s:2:"ps";s:7:"version";s:6:"4.1.13";s:7:"updated";s:19:"2015-03-29 22:19:48";s:12:"english_name";s:6:"Pashto";s:11:"native_name";s:8:"پښتو";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.1.13/ps.zip";s:3:"iso";a:2:{i:1;s:2:"ps";i:2;s:3:"pus";}s:7:"strings";a:1:{s:8:"continue";s:19:"دوام ورکړه";}}s:5:"pt_PT";a:8:{s:8:"language";s:5:"pt_PT";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-04 16:16:38";s:12:"english_name";s:21:"Portuguese (Portugal)";s:11:"native_name";s:10:"Português";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/pt_PT.zip";s:3:"iso";a:1:{i:1;s:2:"pt";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"pt_BR";a:8:{s:8:"language";s:5:"pt_BR";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-26 14:54:05";s:12:"english_name";s:19:"Portuguese (Brazil)";s:11:"native_name";s:20:"Português do Brasil";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/pt_BR.zip";s:3:"iso";a:2:{i:1;s:2:"pt";i:2;s:3:"por";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuar";}}s:5:"ro_RO";a:8:{s:8:"language";s:5:"ro_RO";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-04 12:04:46";s:12:"english_name";s:8:"Romanian";s:11:"native_name";s:8:"Română";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/ro_RO.zip";s:3:"iso";a:2:{i:1;s:2:"ro";i:2;s:3:"ron";}s:7:"strings";a:1:{s:8:"continue";s:9:"Continuă";}}s:5:"ru_RU";a:8:{s:8:"language";s:5:"ru_RU";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-04 13:58:23";s:12:"english_name";s:7:"Russian";s:11:"native_name";s:14:"Русский";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/ru_RU.zip";s:3:"iso";a:2:{i:1;s:2:"ru";i:2;s:3:"rus";}s:7:"strings";a:1:{s:8:"continue";s:20:"Продолжить";}}s:5:"sk_SK";a:8:{s:8:"language";s:5:"sk_SK";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-09 11:05:20";s:12:"english_name";s:6:"Slovak";s:11:"native_name";s:11:"Slovenčina";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/sk_SK.zip";s:3:"iso";a:2:{i:1;s:2:"sk";i:2;s:3:"slk";}s:7:"strings";a:1:{s:8:"continue";s:12:"Pokračovať";}}s:5:"sl_SI";a:8:{s:8:"language";s:5:"sl_SI";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-05 08:28:07";s:12:"english_name";s:9:"Slovenian";s:11:"native_name";s:13:"Slovenščina";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/sl_SI.zip";s:3:"iso";a:2:{i:1;s:2:"sl";i:2;s:3:"slv";}s:7:"strings";a:1:{s:8:"continue";s:8:"Nadaljuj";}}s:2:"sq";a:8:{s:8:"language";s:2:"sq";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-03 20:47:33";s:12:"english_name";s:8:"Albanian";s:11:"native_name";s:5:"Shqip";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/sq.zip";s:3:"iso";a:2:{i:1;s:2:"sq";i:2;s:3:"sqi";}s:7:"strings";a:1:{s:8:"continue";s:6:"Vazhdo";}}s:5:"sr_RS";a:8:{s:8:"language";s:5:"sr_RS";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-04 20:17:20";s:12:"english_name";s:7:"Serbian";s:11:"native_name";s:23:"Српски језик";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/sr_RS.zip";s:3:"iso";a:2:{i:1;s:2:"sr";i:2;s:3:"srp";}s:7:"strings";a:1:{s:8:"continue";s:14:"Настави";}}s:5:"sv_SE";a:8:{s:8:"language";s:5:"sv_SE";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-03 07:14:30";s:12:"english_name";s:7:"Swedish";s:11:"native_name";s:7:"Svenska";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/sv_SE.zip";s:3:"iso";a:2:{i:1;s:2:"sv";i:2;s:3:"swe";}s:7:"strings";a:1:{s:8:"continue";s:9:"Fortsätt";}}s:3:"szl";a:8:{s:8:"language";s:3:"szl";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-09-24 19:58:14";s:12:"english_name";s:8:"Silesian";s:11:"native_name";s:17:"Ślōnskŏ gŏdka";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.6.1/szl.zip";s:3:"iso";a:1:{i:3;s:3:"szl";}s:7:"strings";a:1:{s:8:"continue";s:13:"Kōntynuować";}}s:2:"th";a:8:{s:8:"language";s:2:"th";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-10-12 07:04:13";s:12:"english_name";s:4:"Thai";s:11:"native_name";s:9:"ไทย";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.6.1/th.zip";s:3:"iso";a:2:{i:1;s:2:"th";i:2;s:3:"tha";}s:7:"strings";a:1:{s:8:"continue";s:15:"ต่อไป";}}s:2:"tl";a:8:{s:8:"language";s:2:"tl";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-11-27 15:51:36";s:12:"english_name";s:7:"Tagalog";s:11:"native_name";s:7:"Tagalog";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.4.2/tl.zip";s:3:"iso";a:2:{i:1;s:2:"tl";i:2;s:3:"tgl";}s:7:"strings";a:1:{s:8:"continue";s:10:"Magpatuloy";}}s:5:"tr_TR";a:8:{s:8:"language";s:5:"tr_TR";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-19 17:56:07";s:12:"english_name";s:7:"Turkish";s:11:"native_name";s:8:"Türkçe";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/tr_TR.zip";s:3:"iso";a:2:{i:1;s:2:"tr";i:2;s:3:"tur";}s:7:"strings";a:1:{s:8:"continue";s:5:"Devam";}}s:5:"ug_CN";a:8:{s:8:"language";s:5:"ug_CN";s:7:"version";s:5:"4.6.1";s:7:"updated";s:19:"2016-12-01 16:07:46";s:12:"english_name";s:6:"Uighur";s:11:"native_name";s:9:"Uyƣurqə";s:7:"package";s:64:"https://downloads.wordpress.org/translation/core/4.6.1/ug_CN.zip";s:3:"iso";a:2:{i:1;s:2:"ug";i:2;s:3:"uig";}s:7:"strings";a:1:{s:8:"continue";s:26:"داۋاملاشتۇرۇش";}}s:2:"uk";a:8:{s:8:"language";s:2:"uk";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-04 23:10:17";s:12:"english_name";s:9:"Ukrainian";s:11:"native_name";s:20:"Українська";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/uk.zip";s:3:"iso";a:2:{i:1;s:2:"uk";i:2;s:3:"ukr";}s:7:"strings";a:1:{s:8:"continue";s:20:"Продовжити";}}s:2:"ur";a:8:{s:8:"language";s:2:"ur";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-09 10:42:49";s:12:"english_name";s:4:"Urdu";s:11:"native_name";s:8:"اردو";s:7:"package";s:59:"https://downloads.wordpress.org/translation/core/4.7/ur.zip";s:3:"iso";a:2:{i:1;s:2:"ur";i:2;s:3:"urd";}s:7:"strings";a:1:{s:8:"continue";s:19:"جاری رکھیں";}}s:5:"uz_UZ";a:8:{s:8:"language";s:5:"uz_UZ";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-07 17:58:49";s:12:"english_name";s:5:"Uzbek";s:11:"native_name";s:11:"O‘zbekcha";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/uz_UZ.zip";s:3:"iso";a:2:{i:1;s:2:"uz";i:2;s:3:"uzb";}s:7:"strings";a:1:{s:8:"continue";s:11:"Davom etish";}}s:2:"vi";a:8:{s:8:"language";s:2:"vi";s:7:"version";s:5:"4.4.2";s:7:"updated";s:19:"2015-12-09 01:01:25";s:12:"english_name";s:10:"Vietnamese";s:11:"native_name";s:14:"Tiếng Việt";s:7:"package";s:61:"https://downloads.wordpress.org/translation/core/4.4.2/vi.zip";s:3:"iso";a:2:{i:1;s:2:"vi";i:2;s:3:"vie";}s:7:"strings";a:1:{s:8:"continue";s:12:"Tiếp tục";}}s:5:"zh_CN";a:8:{s:8:"language";s:5:"zh_CN";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-08 04:30:37";s:12:"english_name";s:15:"Chinese (China)";s:11:"native_name";s:12:"简体中文";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/zh_CN.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"继续";}}s:5:"zh_TW";a:8:{s:8:"language";s:5:"zh_TW";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2016-12-07 09:57:58";s:12:"english_name";s:16:"Chinese (Taiwan)";s:11:"native_name";s:12:"繁體中文";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/zh_TW.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"繼續";}}s:5:"zh_HK";a:8:{s:8:"language";s:5:"zh_HK";s:7:"version";s:3:"4.7";s:7:"updated";s:19:"2017-01-07 10:19:30";s:12:"english_name";s:19:"Chinese (Hong Kong)";s:11:"native_name";s:16:"香港中文版	";s:7:"package";s:62:"https://downloads.wordpress.org/translation/core/4.7/zh_HK.zip";s:3:"iso";a:2:{i:1;s:2:"zh";i:2;s:3:"zho";}s:7:"strings";a:1:{s:8:"continue";s:6:"繼續";}}}',
                'autoload' => 'no',
            ),
            131 => 
            array (
                'option_id' => 137,
                'option_name' => 'WPLANG',
                'option_value' => '',
                'autoload' => 'yes',
            ),
        ));
        
        
    }
}