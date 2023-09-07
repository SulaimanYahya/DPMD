<div class="container-fluid page-body-wrapper">
	<!-- partial:partials/_sidebar.html -->
	<nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('Admin') ?>">
					<i class="mdi mdi-home menu-icon"></i>
					<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<?php
			$role_id = $this->session->userdata('role_id');
			$queryMenu = "SELECT `user_menu`.`id`, `menu`,`ikon`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
						     AND `user_menu`.is_active = 1
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
			$menu = $this->db->query($queryMenu)->result_array();
			?>
			<!-- LOOPING MENU -->
			<?php foreach ($menu as $m) : ?>
				<!-- SIAPKAN SUB-MENU SESUAI MENU -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="collapse" href="#menu<?= $m['id'] ?>" aria-expanded="false" aria-controls="menu<?= $m['id'] ?>">
						<i class="<?= $m['ikon']; ?>"></i>
						<span class="menu-title"><?= $m['menu']; ?></span>
						<i class="menu-arrow"></i>
					</a>
					<?php
					$menuId = $m['id'];
					$querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                        ";
					$subMenu = $this->db->query($querySubMenu)->result_array();
					?>
					<div class="collapse" id="menu<?= $m['id'] ?>">
						<?php foreach ($subMenu as $sm) : ?>
							<ul class="nav flex-column sub-menu">
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url($sm['url']); ?>">
										<?= $sm['title']; ?>
									</a>
								</li>
							</ul>
						<?php endforeach; ?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</nav>