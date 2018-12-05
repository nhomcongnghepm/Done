<?php
					if(isset($_GET['menu'])){
                        if($_GET['menu']=='home') {
                            include("home.php");
                        }
						if($_GET['menu']=='quanlysanpham'){
							include "../../view/sanpham.php";
						}else if($_GET['menu']=='sanpham_news') {
                            include("../../view/themsanpham.php");
                        }
                        else if($_GET['menu']=='sanpham_edit') {
                            include("../../view/sanpham_edit.php");
                        }else if($_GET['menu']=='sanpham_delete') {
                            include("../../view/sanpham_delete.php");
                        }else if($_GET['menu']=='sanpham_saveedit') {
                            include("../../view/sanpham_saveedit.php");
                        }

						if($_GET['menu']=='quanlykhachhang'){
							include ("../../view/quanlyhocsinh_admin.php");
						}elseif($_GET['menu']=='hocsinh_edit'){
							include "../../view/hocsinh_edit_admin.php";
						}elseif($_GET['menu']=='hocsinh_saveedit'){
							include "hocsinh_savedit_admin.php";
						}
						if($_GET['menu']=='quanlydonhang'){
							include ("../../view/quanlygiaovien_admin.php");
						}else if($_GET['menu']=='giaovien_edit'){
							include "../../view/giaovien_edit_admin.php";
						}else if($_GET['menu']=='giaovien_saveedit') {
                            include "giaovien_savedit_admin.php";
                        }
					}else include("home.php");
				?>