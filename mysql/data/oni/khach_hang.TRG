TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger Backup_KhachHang_INSERT\n\nAFTER INSERT \non khach_hang\n	for each ROW\n  		BEGIN\n        	INSERT into lich_su_thay_doi_khach_hang\n            values(\'AD00000000\',NOW(),new.MaKhachHang,new.Ho,new.Ten,\n                   new.GioiTinh,new.`NgaySinh`,new.`SDT`,new.`Email`,new.`DiaChi`,new.`LoaiKH`,\'insert\');\n        END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `Backup_KhachHang_UPDATE` AFTER UPDATE ON `khach_hang` FOR EACH ROW BEGIN\n        	INSERT into lich_su_thay_doi_khach_hang\n            values(\'AD00000000\',NOW(),old.MaKhachHang,old.Ho,old.Ten,\n                   old.GioiTinh,old.`NgaySinh`,old.`SDT`,old.`Email`,old.`DiaChi`,old.`LoaiKH`,\'update\');\n        END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `Backup_KhachHang_DELETE` AFTER DELETE ON `khach_hang` FOR EACH ROW BEGIN\n        	INSERT into lich_su_thay_doi_khach_hang\n            values(\'AD00000000\',NOW(),old.MaKhachHang,old.Ho,old.Ten,\n                   old.GioiTinh,old.`NgaySinh`,old.`SDT`,old.`Email`,old.`DiaChi`,old.`LoaiKH`,\'delete\');\n        END'
sql_modes=1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
created=167161252823 167161292320 167161295884
