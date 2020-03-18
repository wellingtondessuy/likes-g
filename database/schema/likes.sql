CREATE TABLE `likes` (
    `id`  bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
    `user_id`  int(10) UNSIGNED NOT NULL ,
    `action`  enum('LIKE','DISLIKE') NOT NULL ,
    `created_at`  timestamp NOT NULL ,
    PRIMARY KEY (`id`),
    CONSTRAINT `likes_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
    INDEX `likes_action` (`action`) USING BTREE 
);