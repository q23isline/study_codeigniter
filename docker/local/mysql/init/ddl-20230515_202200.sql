CREATE TABLE IF NOT EXISTS `users` (
    `id` char(36) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ID',
    `mail_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'メールアドレス',
    `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'パスワード',
    `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL COMMENT '権限',
    `created` datetime NOT NULL COMMENT '作成日',
    `modified` datetime NOT NULL COMMENT '更新日',
    PRIMARY KEY (`id`),
    UNIQUE KEY `users_IDX1` (`mail_address`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci
