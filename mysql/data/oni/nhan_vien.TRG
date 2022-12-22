TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `Backup_NhanVien_INSERT` AFTER INSERT ON `nhan_vien` FOR EACH ROW BEGIN\n        	INSERT into lich_su_thay_doi_nhan_vien\n            values(\'AD00000000\',NOW(),new.MaNhanVien,new.Ho,new.Ten,\n                   new.GioiTinh,new.`ChucVu`,\'insert\');\n        END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `Backup_NhanVien_UPDATE` AFTER UPDATE ON `nhan_vien` FOR EACH ROW BEGIN\n        	INSERT into lich_su_thay_doi_nhan_vien\n            values(\'AD00000000\',NOW(),old.MaNhanVien,old.Ho,old.Ten,\n                   old.GioiTinh,old.`ChucVu`,\'update\');\n        END' 'CREATE DEFINER=`root`@`localhost` TRIGGER `Backup_NhanVien_DELETE` AFTER DELETE ON `nhan_vien` FOR EACH ROW BEGIN\n        	INSERT into lich_su_thay_doi_nhan_vien\n            values(\'AD00000000\',NOW(),old.MaNhanVien,old.Ho,old.Ten,\n                   old.GioiTinh,old.`ChucVu`,\'delete\');\n        END'
sql_modes=1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
created=167161315612 167161316213 167161316527
