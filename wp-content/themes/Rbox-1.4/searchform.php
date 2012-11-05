<!--search form-->
				
				    <form method="get" id="search" action="<?php echo home_url(); ?>">

					<div>
					<?php $req=''; ?>
                    
               		
                    <input type="hidden" id="lang" name="lang" value="<?php echo qtrans_getLanguage(); ?>"/>
                    <input type="text" value="<?php esc_attr_e( '<!--:en-->search English keyword<!--:--><!--:zh-->搜尋中文關鍵字<!--:-->', 'Rbox' ); ?>" name="s" id="s"  onfocus="if(this.value=='<?php esc_attr_e( '<!--:en-->search English keyword<!--:--><!--:zh-->搜尋中文關鍵字<!--:-->', 'Rbox' ); ?>'){this.value=''};" onblur="if(this.value==''){this.value='<?php esc_attr_e( '<!--:en-->search English keyword<!--:--><!--:zh-->搜尋中文關鍵字<!--:-->', 'Rbox' ); ?>'};" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
               		
                    <input type="submit" id="searchsubmit" value="GO" />
                	
					</div>
               		</form>
                    

 