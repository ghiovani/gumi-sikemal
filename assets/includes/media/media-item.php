							<?php 
								
							if(isset($media['type'])){ 
								if($media['type'] == 'gallery')
									$type = 'gallery';
								else
									$type = 'portfolio';
							}
							else{
								$type = 'portfolio';
							}
								
							?>
							<!-- Media Item -->
							<div class="media-item animate-onscroll <?php if($type == 'gallery') echo 'gallery-media'; ?>">
								
								<div class="media-image">
								<img class="image" src="<?php if(isset($media['thumb'])) echo base_url()."assets/".$media['thumb']; ?>" alt="">
										
									
									<div class="media-hover">
										<div class="media-icons">
											<a href="<?php if(isset($media['jackbox-link'])) echo base_url()."assets/".$media['jackbox-link']; ?>" data-group="media-jackbox" data-thumbnail="<?php if(isset($media['thumb']))  echo base_url()."assets/".$media['thumb']; ?>" class="jackbox media-icon"><i class="icons <?php if($media['format'] == 'image') echo 'icon-zoom-in'; else if($media['format'] == 'video') echo 'icon-play'; ?>"></i></a>
											<a href="portfolio-single-sidebar.php" class="media-icon"><i class="icons icon-link"></i></a>
										</div>
									</div>
								
								</div>
								
								<?php 
									if($type != 'gallery'){
								?>
								
								<div class="media-info">
								
									<div class="media-header">
										
										<div class="media-format">
											<div>
											<i class="icons <?php if($media['format'] == 'image') echo 'icon-picture'; else if($media['format'] == 'video') echo 'icon-video'; ?>"></i>
											</div>
										</div>
										
										<div class="media-caption">
											<h2><a href="portfolio-single-sidebar.php"><?php if(isset($media['name'])) echo $media['name']; ?></a></h2>
											<span class="tags"><?php if(isset($media['tags'])) echo $media['tags']; ?></span>
										</div>
										
									</div>
									
									<div class="media-description">
										<p><?php if(isset($media['description'])) echo $media['description']; ?></p>
									</div>
									
									<div class="media-button">
										<a href="portfolio-single-sidebar.php" class="button big button-arrow">More info</a>
										<?php if(isset($media['project-link'])) echo '<a href="'.$media['project-link'].'" target="_blank" class="button big button-arrow">View Project</a>';?>
									</div>
								
								</div>
								
								<?php
									}else{
										
										if(isset($media['related-title'],$media['link'])){
											echo '<h4 class="related-title"><a href="'.$media['link'].'">'.$media['related-title'].'</a></h4>';
										}
										
									}
								?>
								
							</div>
							<!-- /Media Item -->