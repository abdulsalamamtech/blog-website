## Developed By Abdulsalam Amtech

## Blog Website

content management system (CMS) that relies on MySQL (or MariaDB) as its database management system.

Below is an overview of the primary tables of the database schema along with their relationships:

### Key Tables and Descriptions

1. **users**
   - **Description:** Stores user data. (Has: roles, posts, comments, )
   - **Key Fields:**
     - `ID` (Primary Key)
     - `name`(Represent username)
     - `email`Index
     - `password` (hashed password)
     - `status`

2. **user_info**
   - **Description:** Stores users information data. (Belongs to user)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `user_id`
     - `first_name`
     - `last_name`
     - `location`
     - `country`
     - `status`

3. **roles**
   - **Description:** Stores roles data.
   - **Key Fields:**
     - `ID` (Primary Key)
     - `name` Enum('user', 'super-admin', 'admin', 'editor', 'author','viewer')
     - `status`

     'user' - view posts and manage their comments
     'super-admin' - manage the entire website
     'admin', - manage other users
     'editor' - manage posts
     'author', - mange their own post
     'viewer' - inspection only

5. **user_roles**
   - **Description:** Stores roles related to a user data. (Many to Many)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `user_id`
     - `role_id`

6. **categories**
   - **Description:** Stores categories data. (Belongs to posts)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `created_by` (User that created the category)
     - `name`
     - `slug` Unique, Index

7. **tags**
   - **Description:** Stores tags data. (Belongs to posts)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `created_by` (User that created the tag)
     - `name`
     - `slug` Unique, Index

8. **images**
   - **Description:** Stores image data. (Belongs to posts)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `created_by` (User that created the image)
     - `path` Nullable
     - `file_id`
     - `url`
     - `size`
     - `hosted_at` (AWS S3, Cloudinary, ImageInk)
     - `active`

9. **posts**
   - **Description:** Stores post data. (Belongs to user, Has: categories, tags, comments)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `created_by` (User that write the post)
     - `image_id`   (The featured image)
     - `title`
     - `slug` Unique, Index
     - `content`
     - `status` Enum('draft', 'published', 'archived')
     - `active` Bool(true, false : if the post is approved)

10. **comments**
   - **Description:** Stores users comments data. (Belongs to user, posts, comment)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `user_id`
     - `post_id`
     - `parent_comment_id`
     - `content`
     - `active` Bool(true, false : if the comment is approved)


11. **post_categories**
   - **Description:** Stores categories related to a post data. (Many to Many)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `post_id`
     - `category_id`

12. **post_tags**
   - **Description:** Stores tags related to a post data. (Many to Many)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `post_id`
     - `tag_id`

13. **likes**
   - **Description:** Stores tags related to a post data. (Belongs to post, user)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `user_id`
     - `post_id`

13. **subscribers**
   - **Description:** Stores subscribers data. (Belongs to post, user)
   - **Key Fields:**
     - `ID` (Primary Key)
     - `email` Index
     - `active` Bool(true, false : if the user email is active)

     
