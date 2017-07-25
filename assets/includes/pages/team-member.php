								<!-- Team Member -->
								<div class="team-member animate-onscroll <?php if(isset($team_member['class'])) echo $team_member['class']; ?>">
									
									<img class="team-member-image" src="<?php if(isset($team_member['img'])) echo base_url()."assets/".$team_member['img']; ?>" alt="">
									
									<div class="team-member-info">
										
										<h2><?php if(isset($team_member['name'])) echo $team_member['name']; ?></h2>
										<span class="job"><?php if(isset($team_member['job'])) echo $team_member['job']; ?></span>
										
										<div class="team-member-more">
											<?php if(isset($team_member['description'])) echo $team_member['description']; ?>

											<div class="social-media">
												<span class="small-caption">Get connected:</span>
												<ul class="social-icons">
													<?php
													
													if(isset($team_member['facebook']))
														echo '<li class="facebook"><a href="'.$team_member['facebook'].'" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>';
														
													if(isset($team_member['twitter']))
														echo '<li class="twitter"><a href="'.$team_member['twitter'].'" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>';
														
													if(isset($team_member['google']))
														echo '<li class="google"><a href="'.$team_member['google'].'" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>';
														
													if(isset($team_member['youtube']))
														echo '<li class="youtube"><a href="'.$team_member['youtube'].'" class="tooltip-ontop" title="Flickr"><i class="icons icon-youtube-1"></i></a></li>';
														
													if(isset($team_member['flickr']))
														echo '<li class="flickr"><a href="'.$team_member['flickr'].'" class="tooltip-ontop" title="Flickr"><i class="icons icon-flickr-4"></i></a></li>';
													
													if(isset($team_member['email']))
														echo '<li class="email"><a href="'.$team_member['email'].'" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>';
													
													?>
												</ul>
												<ul class="social-buttons">
													<?php
													
													if(isset($team_member['twitter-follow']))
														echo '<li><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a></li>';
													
													?>
												</ul>
											</div>
										</div>
										
									</div>
									
								</div>
								<!-- /Team Member -->