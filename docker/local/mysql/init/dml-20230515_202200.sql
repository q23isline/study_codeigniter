INSERT IGNORE INTO `users` (`id`, `mail_address`, `password`, `role`, `created`, `modified`) VALUES (UUID(), 'admin@example.com', 'admin', 'admin', NOW(), NOW());
