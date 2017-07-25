						<!-- Testimonial -->
						<div class="testimonial animate-onscroll">
							
							<div class="testimonial-content">
								<p><?php if(isset($testimonial['testimonial'])) echo $testimonial['testimonial']; ?></p>
							</div>
							
							<div class="testimonial-author">
								<img src="<?php if(isset($testimonial['img'])) echo $testimonial['img']; ?>" alt="">
								<div class="author-meta">
									<span class="name"><?php if(isset($testimonial['name'])) echo $testimonial['name'].','; ?></span>
									<span class="location"><?php if(isset($testimonial['location'])) echo $testimonial['location']; ?></span>
								</div>
							</div>
							
						</div>
						<!-- /Testimonial -->