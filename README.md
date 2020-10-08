# find-jobs-wordpress

### Wordpress 5.5.1
## How-to
1) Unzip `wp-contents` to your Wordpress installiation path. (You should replace your 'wp-contents')
2) Create database and execute `bitnami_wordpress.sql`
admin user creds: username: `user`      password: `123456`

---
Inside wp-contents already installed 2 plugins:
- Advanced Custom Fields @5.9.1 By Elliot Condon
- Simple Local Avatars @2.1.1 By Jake Goldman, 10up

---
## If you are happy to install everything manually:

1) Install manually 2 plugins:
  - Advanced Custom Fields -> this plugin manages extra fields for Wordpress built-in types (Eg. catagory, post)
  - Simple Local Avatars -> this plugin adds avatar images for users
2) Copy theme `Theme Codes/findjobs` to the your Wordpress `wp-content/themes` directory
3) Add custom fields for type 'post' and 'category':
  - For category type custom field you should just add 1 field with name `cat_icon`
   ![alt text](https://raw.githubusercontent.com/serdarjan1995/find-jobs-wordpress/master/category_custom_fields.PNG "Custom Fields : Category")
  - For post type custom field you should add 2 fields with names `location` and `employment_type`
  ![alt text](https://raw.githubusercontent.com/serdarjan1995/find-jobs-wordpress/master/post_custom_fields.PNG "Custom Fields : Post")
4) Add some users (authors) and attach profile images editing them. (plugin Simple Local Avatars) (avatar field displayed only on editing 'user')
5) Add some categories and add material design icon codes. (plugin Advanced Custom Fields)
6) Add some posts with `location` and `employment_type` fields. Also try to assign different authors created on step 4
