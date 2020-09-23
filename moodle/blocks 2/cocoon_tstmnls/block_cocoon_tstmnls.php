<?php

class block_cocoon_tstmnls extends block_base {

    /**
     * Start block instance.
     */
    function init() {
        $this->title = get_string('pluginname', 'block_cocoon_tstmnls');
    }

    /**
     * The block is usable in all pages
     */
     function applicable_formats() {
         return array(
           'all' => true,
           'my' => false,
         );
     }


    /**
     * Customize the block title dynamically.
     */
    function specialization() {
        // if (isset($this->config->title)) {
        //     $this->title = $this->title = format_string($this->config->title, true, ['context' => $this->context]);
        // } else {
        //     $this->title = get_string('newcustomsliderblock', 'block_cocoon_tstmnls');
        // }
        global $CFG;
        include($CFG->dirroot . '/theme/edumy/ccn/block_handler/specialization.php');
    }

    /**
     * The block can be used repeatedly in a page.
     */
    function instance_allow_multiple() {
        return true;
    }

    /**
     * Build the block content.
     */
    function get_content() {
        global $CFG, $PAGE;

        require_once($CFG->libdir . '/filelib.php');


        if ($this->content !== NULL) {
            return $this->content;
        }
        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;}else{$this->content->subtitle = 'What People Say';}
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;}else{$this->content->subtitle = 'Cum doctus civibus efficiantur in imperdiet deterruisset.';}
        if(!empty($this->config->autoplay)){$this->content->autoplay = $this->config->autoplay;}else{$this->content->autoplay = 'false';}
        if(!empty($this->config->loop)){$this->content->loop = $this->config->loop;}else{$this->content->loop = 'true';}
        if(!empty($this->config->speed)){$this->content->speed = $this->config->speed;}else{$this->content->speed = '2000';}

        if (!empty($this->config) && is_object($this->config)) {
            $data = $this->config;
            $data->slidesnumber = is_numeric($data->slidesnumber) ? (int)$data->slidesnumber : 0;
        } else {
            $data = new stdClass();
            $data->slidesnumber = 0;
        }
        $text = '';
        if ($this->config->style == 0) {
        if ($data->slidesnumber > 0) {
            $text = '	<section id="our-testimonials" class="our-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
						<p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonialsec">';
          if ($data->slidesnumber > 3) {
            $text .='<ul class="ccn-tes-nav-multiple tes-nav-'.$this->instance->id.'">';
          } else {
            $text .='<ul class="ccn_tes_nav_single_img tes-nav-'.$this->instance->id.'">';
          }
          $fs = get_file_storage();
          for ($i = 1; $i <= $data->slidesnumber; $i++) {
              $sliderimage = 'file_slide' . $i;
              $slide_title = 'slide_title' . $i;
              $slide_subtitle = 'slide_subtitle' . $i;
              $slide_text = 'slide_text' . $i;


              if (!empty($data->$sliderimage)) {
                  $files = $fs->get_area_files($this->context->id, 'block_cocoon_tstmnls', 'slides', $i, 'sortorder DESC, id ASC', false, 0, 0, 1);
                  if (count($files) >= 1) {
                      $mainfile = reset($files);
                      $mainfile = $mainfile->get_filename();
                  } else {
                      continue;
                  }
                  $text .= '<li>
                    <img class="img-fluid" src="' . moodle_url::make_file_url("$CFG->wwwroot/pluginfile.php",
                        "/{$this->context->id}/block_cocoon_tstmnls/slides/" . $i . '/' . $mainfile)
                        . '" alt="' . $sliderimage . '"/>
                  </li>';
              }

          }

          $text .='</ul>';
          if ($data->slidesnumber > 3) {
            $text .='<ul class="ccn-tes-for-multiple tes-for-'.$this->instance->id.'">';
          } else {
            $text .='<ul class="tes-for-'.$this->instance->id.'">';
          }
            for ($i = 1; $i <= $data->slidesnumber; $i++) {
                $sliderimage = 'file_slide' . $i;
                $slide_title = 'slide_title' . $i;
                $slide_subtitle = 'slide_subtitle' . $i;
                $slide_text = 'slide_text' . $i;

                if (!empty($data->$sliderimage)) {
                    $files = $fs->get_area_files($this->context->id, 'block_cocoon_tstmnls', 'slides', $i, 'sortorder DESC, id ASC', false, 0, 0, 1);
                    if (count($files) >= 1) {
                        $mainfile = reset($files);
                        $mainfile = $mainfile->get_filename();
                    } else {
                        continue;
                    }

                    $text .= '<li>
								<div class="testimonial_item">
									<div class="details">
										<h5>'.format_text($data->$slide_title, FORMAT_HTML, array('filter' => true)).'</h5>
										<span class="small text-thm">'.format_text($data->$slide_subtitle, FORMAT_HTML, array('filter' => true)).'</span>
										<p>'.format_text($data->$slide_text, FORMAT_HTML, array('filter' => true)).'</p>
									</div>
								</div>
							</li>';
                }

            }
            $text .= '
            </ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<script type="text/javascript">
(function($){
  $(window).on("load", function() {
    if($(".tes-for-'.$this->instance->id.'").length){
      $(".tes-for-'.$this->instance->id.'").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        autoplay: '.$this->content->autoplay.',
        infinite: '.$this->content->loop.',
        autoplaySpeed: '.$this->content->speed.',
        asNavFor: \'.tes-nav-'.$this->instance->id.'\'
      });
      $(".tes-nav-'.$this->instance->id.'").slick({';
        if ($data->slidesnumber > 3) {
        $text .='slidesToShow: 3,';
      } else {
        $text .='slidesToShow: 1,';
      }
      $text .='
        slidesToScroll: 1,
        asNavFor: \'.tes-for-'.$this->instance->id.'\',
        dots: false,
        arrows: false,
        centerPadding: \'1px\',
        centerMode: true,
        infinite: '.$this->content->loop.',
        focusOnSelect: true
      });
  }
});
}(jQuery));
</script>
';
        }
      } elseif ($this->config->style == 1) {

        if ($data->slidesnumber > 0) {
            $text = '	<section id="our-testimonials" class="our-testimonial">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
						<p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="ccn_testimonial_slider_home2 testimonial_slider_home2-'.$this->instance->id.'">';
          $fs = get_file_storage();
            for ($i = 1; $i <= $data->slidesnumber; $i++) {
                $sliderimage = 'file_slide' . $i;
                $slide_title = 'slide_title' . $i;
                $slide_subtitle = 'slide_subtitle' . $i;
                $slide_text = 'slide_text' . $i;

                if (!empty($data->$sliderimage)) {
                    $files = $fs->get_area_files($this->context->id, 'block_cocoon_tstmnls', 'slides', $i, 'sortorder DESC, id ASC', false, 0, 0, 1);
                    if (count($files) >= 1) {
                        $mainfile = reset($files);
                        $mainfile = $mainfile->get_filename();
                    } else {
                        continue;
                    }

                    $text .= '
                    <div class="item">
  <div class="testimonial_item home2">
    <div class="details">
      <div class="icon"><span class="fa fa-quote-left"></span></div>
      <p>'.format_text($data->$slide_text, FORMAT_HTML, array('filter' => true)).'</p>
    </div>
    <div class="thumb">
      <img class="img-fluid rounded-circle" src="' . moodle_url::make_file_url("$CFG->wwwroot/pluginfile.php",
          "/{$this->context->id}/block_cocoon_tstmnls/slides/" . $i . '/' . $mainfile)
          . '" alt="' . $sliderimage . '">
      <div class="title">'.format_text($data->$slide_title, FORMAT_HTML, array('filter' => true)).'</div>
      <div class="subtitle">'.format_text($data->$slide_subtitle, FORMAT_HTML, array('filter' => true)).'</div>
    </div>
  </div>
</div>';
                }

            }
            $text .= '
            </div>
				</div>
			</div>
		</div>
	</section>
  <script type="text/javascript">
  (function($){
    $(window).on("load", function() {
      if($(".testimonial_slider_home2-'.$this->instance->id.'").length){
          $(".testimonial_slider_home2-'.$this->instance->id.'").owlCarousel({
              center:true,
              loop:'.$this->content->loop.',
              margin:15,
              dots:true,
              nav:false,
              rtl:false,
              autoplayHoverPause:false,
              autoplay: '.$this->content->autoplay.',
              singleItem: true,
              smartSpeed: '.$this->content->speed.',
              navText: [
                \'<i class="flaticon-left-arrow"></i>\',
                \'<i class="flaticon-right-arrow-1"></i>\'
              ],
              responsive: {
                  0: {
                      items: 1,
                      center: false
                  },
                  480:{
                      items:1,
                      center: false
                  },
                  520:{
                      items:1,
                      center: false
                  },
                  600: {
                      items: 1,
                      center: false
                  },
                  768: {
                      items: 2
                  },
                  992: {
                      items: 2
                  },
                  1200: {
                      items: 3
                  },
                  1366: {
                      items: 3
                  },
                  1400: {
                      items: 3
                  }
              }
          })
      }
  });
  }(jQuery));
  </script>
';
     }
   } elseif ($this->config->style == 2) {

     if ($data->slidesnumber > 0) {
         $text = '		<section class="our-testimonials bgc-fa ccn_tstmnls_s3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
						<p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="ccn_testimonial_slider_home3 testimonial_slider_home3-'.$this->instance->id.'">';
       $fs = get_file_storage();
         for ($i = 1; $i <= $data->slidesnumber; $i++) {
             $sliderimage = 'file_slide' . $i;
             $slide_title = 'slide_title' . $i;
             $slide_subtitle = 'slide_subtitle' . $i;
             $slide_text = 'slide_text' . $i;

             if (!empty($data->$sliderimage)) {
                 $files = $fs->get_area_files($this->context->id, 'block_cocoon_tstmnls', 'slides', $i, 'sortorder DESC, id ASC', false, 0, 0, 1);
                 if (count($files) >= 1) {
                     $mainfile = reset($files);
                     $mainfile = $mainfile->get_filename();
                 } else {
                     continue;
                 }

                 $text .= '<div class="item">
							<div class="testimonial_grid">
								<div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
								<div class="testimonial_content">
									<div class="thumb">
										<img class="img-fluid" src="' . moodle_url::make_file_url("$CFG->wwwroot/pluginfile.php",
                        "/{$this->context->id}/block_cocoon_tstmnls/slides/" . $i . '/' . $mainfile)
                        . '" alt="' . $sliderimage . '">
										<h4>'.format_text($data->$slide_title, FORMAT_HTML, array('filter' => true)).'</h4>
										<p>'.format_text($data->$slide_subtitle, FORMAT_HTML, array('filter' => true)).'</p>
									</div>
									<div class="details">
										<p>'.format_text($data->$slide_text, FORMAT_HTML, array('filter' => true)).'</p>
									</div>
								</div>
							</div>
						</div>';
             }

         }
         $text .= '
         </div>
 				</div>
 			</div>
 		</div>
 	</section>
  <script type="text/javascript">
  (function($){
    $(window).on("load", function() {
      if($(\'.testimonial_slider_home3-'.$this->instance->id.'\').length){
          $(\'.testimonial_slider_home3-'.$this->instance->id.'\').owlCarousel({
              loop:'.$this->content->loop.',
              margin:15,
              dots: true,
              nav:false,
              rtl:false,
              autoplayHoverPause:false,
              autoplay: '.$this->content->autoplay.',
              smartSpeed: '.$this->content->speed.',
              singleItem: true,
              navText: [
                \'<i class="flaticon-left-arrow"></i>\',
                \'<i class="flaticon-right-arrow-1"></i>\'
              ],
              responsive: {
                  320:{
                      items: 1,
                      center: false
                  },
                  480:{
                      items: 1,
                      center: false
                  },
                  600: {
                      items: 1,
                      center: false
                  },
                  768: {
                      items: 1
                  },
                  992: {
                      items: 1
                  },
                  1200: {
                      items: 1
                  }
              }
          })
      }
  });
  }(jQuery));
  </script>
';
  }


   }

        $this->content = new stdClass;
        $this->content->footer = '';
        $this->content->text = $text;

        return $this->content;

  }


    /**
     * Serialize and store config data
     */
    function instance_config_save($data, $nolongerused = false) {
        global $CFG;

        $filemanageroptions = array('maxbytes'      => $CFG->maxbytes,
                                    'subdirs'       => 0,
                                    'maxfiles'      => 1,
                                    'accepted_types' => array('.jpg', '.png', '.gif'));

        for($i = 1; $i <= $data->slidesnumber; $i++) {
            $field = 'file_slide' . $i;
            if (!isset($data->$field)) {
                continue;
            }

            file_save_draft_area_files($data->$field, $this->context->id, 'block_cocoon_tstmnls', 'slides', $i, $filemanageroptions);
        }

        parent::instance_config_save($data, $nolongerused);
    }

    /**
     * When a block instance is deleted.
     */
    function instance_delete() {
        global $DB;
        $fs = get_file_storage();
        $fs->delete_area_files($this->context->id, 'block_cocoon_tstmnls');
        return true;
    }

    /**
     * Copy any block-specific data when copying to a new block instance.
     * @param int $fromid the id number of the block instance to copy from
     * @return boolean
     */
    public function instance_copy($fromid) {
        global $CFG;

        $fromcontext = context_block::instance($fromid);
        $fs = get_file_storage();

        if (!empty($this->config) && is_object($this->config)) {
            $data = $this->config;
            $data->slidesnumber = is_numeric($data->slidesnumber) ? (int)$data->slidesnumber : 0;
        } else {
            $data = new stdClass();
            $data->slidesnumber = 0;
        }

        $filemanageroptions = array('maxbytes'      => $CFG->maxbytes,
                                    'subdirs'       => 0,
                                    'maxfiles'      => 1,
                                    'accepted_types' => array('.jpg', '.png', '.gif'));

        for($i = 1; $i <= $data->slidesnumber; $i++) {
            $field = 'file_slide' . $i;
            if (!isset($data->$field)) {
                continue;
            }

            // This extra check if file area is empty adds one query if it is not empty but saves several if it is.
            if (!$fs->is_area_empty($fromcontext->id, 'block_cocoon_tstmnls', 'slides', $i, false)) {
                $draftitemid = 0;
                file_prepare_draft_area($draftitemid, $fromcontext->id, 'block_cocoon_tstmnls', 'slides', $i, $filemanageroptions);
                file_save_draft_area_files($draftitemid, $this->context->id, 'block_cocoon_tstmnls', 'slides', $i, $filemanageroptions);
            }
        }

        return true;
    }

    /**
     * The block should only be dockable when the title of the block is not empty
     * and when parent allows docking.
     *
     * @return bool
     */
    public function instance_can_be_docked() {
        return (!empty($this->config->title) && parent::instance_can_be_docked());
    }

    public function html_attributes() {
      global $CFG;
      $attributes = parent::html_attributes();
      include($CFG->dirroot . '/theme/edumy/ccn/block_handler/attributes.php');
      return $attributes;
    }

}
