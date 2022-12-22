TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `triger_insert_image` AFTER INSERT ON `image` FOR EACH ROW BEGIN\n    	IF NEW.type=1 THEN\n            	UPDATE user \n                SET avatar=NEW.image_id\n                WHERE _email = NEW.email;\n            END IF;\n        IF NEW.type=2 THEN\n            	UPDATE user \n                SET cover=NEW.image_id\n                WHERE _email = NEW.email;\n            END IF;\nEND'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_unicode_ci'
created=166868125955
