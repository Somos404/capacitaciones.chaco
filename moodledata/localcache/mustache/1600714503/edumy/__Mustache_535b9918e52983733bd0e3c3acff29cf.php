<?php

class __Mustache_535b9918e52983733bd0e3c3acff29cf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_edumy/head_dashboard')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_preloader')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div class="wrapper">
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_dashboard_navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        // 'disable_dashboard_drawer' inverted section
        $value = $context->find('disable_dashboard_drawer');
        if (empty($value)) {
            
            $buffer .= $indent . '      <section class="dashboard_sidebar dn-1199 ';
            // 'dashboard_scroll_drawer' section
            $value = $context->find('dashboard_scroll_drawer');
            $buffer .= $this->section12532e1dc9117044dfc158d5a8b9df7f($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '        <div class="dashboard_sidebars">
';
            $buffer .= $indent . '          <div class="user_board">
';
            // 'dashboard_nav_user' section
            $value = $context->find('dashboard_nav_user');
            $buffer .= $this->sectionA4da79707fe73da7bc1aa1b8a1f6aa93($context, $indent, $value);
            // 'dashboard_nav_flat' section
            $value = $context->find('dashboard_nav_flat');
            $buffer .= $this->sectionC789749f32bc74cff3346c1f66c60f75($context, $indent, $value);
            $buffer .= $indent . '            <div class="pl30 pr30">
';
            $buffer .= $indent . '              ';
            $value = $this->resolveValue($context->find('leftblocks'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '      </section>
';
        }
        $buffer .= $indent . '    <div class="our-dashbord dashbord ';
        // 'disable_dashboard_drawer' section
        $value = $context->find('disable_dashboard_drawer');
        $buffer .= $this->sectionBd5bd32c98c144701aa16896ce1b6b9d($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '      <div class="dashboard_main_content">
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '          <div class="main_content_container">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '              <div class="col-xl-12">
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                  <div class="col-lg-12">
';
        $buffer .= $indent . '                    <nav class="breadcrumb_widgets ';
        $value = $this->resolveValue($context->find('breadcrumb_clip_dash'), $context);
        $buffer .= $value;
        $buffer .= '" aria-label="breadcrumb mb30">
';
        $buffer .= $indent . '                      <h4 class="title float-left">';
        $value = $this->resolveValue($context->find('pageheading'), $context);
        $buffer .= $value;
        $buffer .= '</h4>
';
        $buffer .= $indent . '                      <ol class="breadcrumb float-right">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.navbar'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                      </ol>
';
        $buffer .= $indent . '                    </nav>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        // 'dash_tabs' section
        $value = $context->find('dash_tabs');
        $buffer .= $this->sectionCa5a5a84b3050530067208d5413bb073($context, $indent, $value);
        $buffer .= $indent . '                <div class="row">
';
        // 'has_blocks_fullwidth_top' section
        $value = $context->find('has_blocks_fullwidth_top');
        $buffer .= $this->section4d99d9331bdbd202f759be458862a023($context, $indent, $value);
        // 'disable_dashboard_drawer' section
        $value = $context->find('disable_dashboard_drawer');
        $buffer .= $this->section852f27a2cede88e359a504844bdb3a16($context, $indent, $value);
        // 'disable_dashboard_drawer' inverted section
        $value = $context->find('disable_dashboard_drawer');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <div class="';
            // 'sidebar_right' section
            $value = $context->find('sidebar_right');
            $buffer .= $this->section653a813f608b603ab96a73c0bbfbf5ff($context, $indent, $value);
            $buffer .= ' ';
            // 'sidebar_right' inverted section
            $value = $context->find('sidebar_right');
            if (empty($value)) {
                
                $buffer .= 'col-lg-12';
            }
            $buffer .= '">
';
        }
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'has_blocks_above_content' section
        $value = $context->find('has_blocks_above_content');
        $buffer .= $this->sectionE2c8d9cef5553e01c2a90ac145c9b299($context, $indent, $value);
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'has_blocks_below_content' section
        $value = $context->find('has_blocks_below_content');
        $buffer .= $this->section12e87b5b25c5ab3f8a2d39dee54de1a8($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        // 'sidebar_right' section
        $value = $context->find('sidebar_right');
        $buffer .= $this->sectionBbab17abd406f11cfd7dfa6e3657c1a0($context, $indent, $value);
        // 'has_blocks_fullwidth_bottom' section
        $value = $context->find('has_blocks_fullwidth_bottom');
        $buffer .= $this->sectionC31d5ba921972ecb0d6f53ba914207f9($context, $indent, $value);
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_dashboard_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '          ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section594644b43f41eedfedc914de6473d7f6($context, $indent, $value);

        return $buffer;
    }

    private function section12532e1dc9117044dfc158d5a8b9df7f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ccn_dashboard_scroll_drawer ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ccn_dashboard_scroll_drawer ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91b6a1010af6596c0971a233aff82cc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' start, theme_edumy ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' start, theme_edumy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4da79707fe73da7bc1aa1b8a1f6aa93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div class="user_profile">
                <div class="media">
                  <div class="media-body">
                    <h4 class="mt-0">{{#str}} start, theme_edumy {{/str}}</h4>
                  </div>
                </div>
              </div>
              <div class="dashbord_nav_list">
                {{{ output.user_menu }}}
              </div>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <div class="user_profile">
';
                $buffer .= $indent . '                <div class="media">
';
                $buffer .= $indent . '                  <div class="media-body">
';
                $buffer .= $indent . '                    <h4 class="mt-0">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section91b6a1010af6596c0971a233aff82cc5($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '              <div class="dashbord_nav_list">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC789749f32bc74cff3346c1f66c60f75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div class="user_profile">
                <div class="media">
                  <div class="media-body">
                    <h4 class="mt-0">{{#str}} start, theme_edumy {{/str}}</h4>
                  </div>
                </div>
              </div>
              <div class="dashbord_nav_list ccn_dashbord_nav_list">
                {{> theme_boost/flat_navigation2 }}
              </div>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <div class="user_profile">
';
                $buffer .= $indent . '                <div class="media">
';
                $buffer .= $indent . '                  <div class="media-body">
';
                $buffer .= $indent . '                    <h4 class="mt-0">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section91b6a1010af6596c0971a233aff82cc5($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '              <div class="dashbord_nav_list ccn_dashbord_nav_list">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/flat_navigation2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd5bd32c98c144701aa16896ce1b6b9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ccn_dashbord_disable_drawer ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ccn_dashbord_disable_drawer ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3714eedcbcc7dc4a86e64eef2300704c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_1_link }}" class="ff_one">
                            <div class="detais">
                              <p>{{{dash_tablet_1_subtitle}}}</p>
                              {{{dash_tablet_1_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_1_icon}}}"></span></div>
                          </a>
                        </div>
                      ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="';
                $value = $this->resolveValue($context->find('dash_tab_col_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                          <a href="';
                $value = $this->resolveValue($context->find('dash_tablet_1_link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="ff_one">
';
                $buffer .= $indent . '                            <div class="detais">
';
                $buffer .= $indent . '                              <p>';
                $value = $this->resolveValue($context->find('dash_tablet_1_subtitle'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                              ';
                $value = $this->resolveValue($context->find('dash_tablet_1_title'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="ff_icon"><span class="';
                $value = $this->resolveValue($context->find('dash_tablet_1_icon'), $context);
                $buffer .= $value;
                $buffer .= '"></span></div>
';
                $buffer .= $indent . '                          </a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52c89233cb41371687a6695aa02f1b65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_2_link }}" class="ff_one style2">
                            <div class="detais">
                              <p>{{{dash_tablet_2_subtitle}}}</p>
                              {{{dash_tablet_2_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_2_icon}}}"></span></div>
                          </a>
                        </div>
                      ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="';
                $value = $this->resolveValue($context->find('dash_tab_col_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                          <a href="';
                $value = $this->resolveValue($context->find('dash_tablet_2_link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="ff_one style2">
';
                $buffer .= $indent . '                            <div class="detais">
';
                $buffer .= $indent . '                              <p>';
                $value = $this->resolveValue($context->find('dash_tablet_2_subtitle'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                              ';
                $value = $this->resolveValue($context->find('dash_tablet_2_title'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="ff_icon"><span class="';
                $value = $this->resolveValue($context->find('dash_tablet_2_icon'), $context);
                $buffer .= $value;
                $buffer .= '"></span></div>
';
                $buffer .= $indent . '                          </a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd35219f66283e7a6a9a4431c61f508c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_3_link }}" class="ff_one style3">
                            <div class="detais">
                              <p>{{{dash_tablet_3_subtitle}}}</p>
                              {{{dash_tablet_3_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_3_icon}}}"></span></div>
                          </a>
                        </div>
                      ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="';
                $value = $this->resolveValue($context->find('dash_tab_col_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                          <a href="';
                $value = $this->resolveValue($context->find('dash_tablet_3_link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="ff_one style3">
';
                $buffer .= $indent . '                            <div class="detais">
';
                $buffer .= $indent . '                              <p>';
                $value = $this->resolveValue($context->find('dash_tablet_3_subtitle'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                              ';
                $value = $this->resolveValue($context->find('dash_tablet_3_title'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="ff_icon"><span class="';
                $value = $this->resolveValue($context->find('dash_tablet_3_icon'), $context);
                $buffer .= $value;
                $buffer .= '"></span></div>
';
                $buffer .= $indent . '                          </a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section088892c4db1be18fcec16268ccad20f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_4_link }}" class="ff_one style4">
                            <div class="detais">
                              <p>{{{dash_tablet_4_subtitle}}}</p>
                              {{{dash_tablet_4_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_4_icon}}}"></span></div>
                          </a>
                        </div>
                      ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="';
                $value = $this->resolveValue($context->find('dash_tab_col_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                          <a href="';
                $value = $this->resolveValue($context->find('dash_tablet_4_link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="ff_one style4">
';
                $buffer .= $indent . '                            <div class="detais">
';
                $buffer .= $indent . '                              <p>';
                $value = $this->resolveValue($context->find('dash_tablet_4_subtitle'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                              ';
                $value = $this->resolveValue($context->find('dash_tablet_4_title'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="ff_icon"><span class="';
                $value = $this->resolveValue($context->find('dash_tablet_4_icon'), $context);
                $buffer .= $value;
                $buffer .= '"></span></div>
';
                $buffer .= $indent . '                          </a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e7a85eceb5b4e21920a955c3fad7ea4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="row">
                      {{#dash_tablet_1}}
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_1_link }}" class="ff_one">
                            <div class="detais">
                              <p>{{{dash_tablet_1_subtitle}}}</p>
                              {{{dash_tablet_1_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_1_icon}}}"></span></div>
                          </a>
                        </div>
                      {{/dash_tablet_1}}
                      {{#dash_tablet_2}}
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_2_link }}" class="ff_one style2">
                            <div class="detais">
                              <p>{{{dash_tablet_2_subtitle}}}</p>
                              {{{dash_tablet_2_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_2_icon}}}"></span></div>
                          </a>
                        </div>
                      {{/dash_tablet_2}}
                      {{#dash_tablet_3}}
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_3_link }}" class="ff_one style3">
                            <div class="detais">
                              <p>{{{dash_tablet_3_subtitle}}}</p>
                              {{{dash_tablet_3_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_3_icon}}}"></span></div>
                          </a>
                        </div>
                      {{/dash_tablet_3}}
                      {{#dash_tablet_4}}
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_4_link }}" class="ff_one style4">
                            <div class="detais">
                              <p>{{{dash_tablet_4_subtitle}}}</p>
                              {{{dash_tablet_4_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_4_icon}}}"></span></div>
                          </a>
                        </div>
                      {{/dash_tablet_4}}
                    </div>
                  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="row">
';
                // 'dash_tablet_1' section
                $value = $context->find('dash_tablet_1');
                $buffer .= $this->section3714eedcbcc7dc4a86e64eef2300704c($context, $indent, $value);
                // 'dash_tablet_2' section
                $value = $context->find('dash_tablet_2');
                $buffer .= $this->section52c89233cb41371687a6695aa02f1b65($context, $indent, $value);
                // 'dash_tablet_3' section
                $value = $context->find('dash_tablet_3');
                $buffer .= $this->sectionEd35219f66283e7a6a9a4431c61f508c($context, $indent, $value);
                // 'dash_tablet_4' section
                $value = $context->find('dash_tablet_4');
                $buffer .= $this->section088892c4db1be18fcec16268ccad20f7($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa5a5a84b3050530067208d5413bb073(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  {{#isloggedin}}
                    <div class="row">
                      {{#dash_tablet_1}}
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_1_link }}" class="ff_one">
                            <div class="detais">
                              <p>{{{dash_tablet_1_subtitle}}}</p>
                              {{{dash_tablet_1_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_1_icon}}}"></span></div>
                          </a>
                        </div>
                      {{/dash_tablet_1}}
                      {{#dash_tablet_2}}
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_2_link }}" class="ff_one style2">
                            <div class="detais">
                              <p>{{{dash_tablet_2_subtitle}}}</p>
                              {{{dash_tablet_2_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_2_icon}}}"></span></div>
                          </a>
                        </div>
                      {{/dash_tablet_2}}
                      {{#dash_tablet_3}}
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_3_link }}" class="ff_one style3">
                            <div class="detais">
                              <p>{{{dash_tablet_3_subtitle}}}</p>
                              {{{dash_tablet_3_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_3_icon}}}"></span></div>
                          </a>
                        </div>
                      {{/dash_tablet_3}}
                      {{#dash_tablet_4}}
                        <div class="{{{dash_tab_col_class}}}">
                          <a href="{{ dash_tablet_4_link }}" class="ff_one style4">
                            <div class="detais">
                              <p>{{{dash_tablet_4_subtitle}}}</p>
                              {{{dash_tablet_4_title}}}
                            </div>
                            <div class="ff_icon"><span class="{{{dash_tablet_4_icon}}}"></span></div>
                          </a>
                        </div>
                      {{/dash_tablet_4}}
                    </div>
                  {{/isloggedin}}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'isloggedin' section
                $value = $context->find('isloggedin');
                $buffer .= $this->section0e7a85eceb5b4e21920a955c3fad7ea4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d99d9331bdbd202f759be458862a023(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      {{{ blocks_fullwidth_top }}}
                    </div>
                  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
';
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->find('blocks_fullwidth_top'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d4e4b25bc133217e63d22bde9040707(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-lg-3 col-xl-3 ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-lg-3 col-xl-3 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74a07414e62a6c49ca93d5e7a00c74dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                      <div class="{{#sidebar_double}} col-lg-3 col-xl-3 {{/sidebar_double}} {{^sidebar_double}} col-lg-4 col-xl-4 {{/sidebar_double}}">
                        <div class="ccn-sidebar-region" aria-label="{{#str}}blocks{{/str}}">
                          {{{ leftblocks }}}
                        </div>
                      </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                      <div class="';
                // 'sidebar_double' section
                $value = $context->find('sidebar_double');
                $buffer .= $this->section0d4e4b25bc133217e63d22bde9040707($context, $indent, $value);
                $buffer .= ' ';
                // 'sidebar_double' inverted section
                $value = $context->find('sidebar_double');
                if (empty($value)) {
                    
                    $buffer .= ' col-lg-4 col-xl-4 ';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="ccn-sidebar-region" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                          ';
                $value = $this->resolveValue($context->find('leftblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a83276f77018d8024cdfa9f88cb26a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-md-12 col-lg-12 col-xl-12 ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-md-12 col-lg-12 col-xl-12 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48a89749267005c08cb744ec12db6900(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-lg-6 ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-lg-6 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe15739d06a889ded9d487c62d2d53f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-lg-8 col-xl-8 ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-lg-8 col-xl-8 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section852f27a2cede88e359a504844bdb3a16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#sidebar_left}}
                      <div class="{{#sidebar_double}} col-lg-3 col-xl-3 {{/sidebar_double}} {{^sidebar_double}} col-lg-4 col-xl-4 {{/sidebar_double}}">
                        <div class="ccn-sidebar-region" aria-label="{{#str}}blocks{{/str}}">
                          {{{ leftblocks }}}
                        </div>
                      </div>
                    {{/sidebar_left}}
                    <div class="
                      {{#sidebar_none}} col-md-12 col-lg-12 col-xl-12 {{/sidebar_none}}
                      {{#sidebar_double}} col-lg-6 {{/sidebar_double}}
                      {{#sidebar_single_left}} col-lg-8 col-xl-8 {{/sidebar_single_left}}
                      {{#sidebar_single_right}} col-lg-8 col-xl-8 {{/sidebar_single_right}}
                    ">
                  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'sidebar_left' section
                $value = $context->find('sidebar_left');
                $buffer .= $this->section74a07414e62a6c49ca93d5e7a00c74dc($context, $indent, $value);
                $buffer .= $indent . '                    <div class="
';
                $buffer .= $indent . '                      ';
                // 'sidebar_none' section
                $value = $context->find('sidebar_none');
                $buffer .= $this->section8a83276f77018d8024cdfa9f88cb26a4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                      ';
                // 'sidebar_double' section
                $value = $context->find('sidebar_double');
                $buffer .= $this->section48a89749267005c08cb744ec12db6900($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                      ';
                // 'sidebar_single_left' section
                $value = $context->find('sidebar_single_left');
                $buffer .= $this->sectionEe15739d06a889ded9d487c62d2d53f5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                      ';
                // 'sidebar_single_right' section
                $value = $context->find('sidebar_single_right');
                $buffer .= $this->sectionEe15739d06a889ded9d487c62d2d53f5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section653a813f608b603ab96a73c0bbfbf5ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-lg-8 col-xl-8';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-lg-8 col-xl-8';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2c8d9cef5553e01c2a90ac145c9b299(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{ blocks_above_content }}}
                  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('blocks_above_content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12e87b5b25c5ab3f8a2d39dee54de1a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{ blocks_below_content }}}
                  ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('blocks_below_content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3c4c2ffaf0775e6a44d1fd4a46f3d44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#sidebar_double}} col-lg-3 col-xl-3 {{/sidebar_double}} {{^sidebar_double}} col-lg-4 col-xl-4 {{/sidebar_double}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                // 'sidebar_double' section
                $value = $context->find('sidebar_double');
                $buffer .= $this->section0d4e4b25bc133217e63d22bde9040707($context, $indent, $value);
                $buffer .= ' ';
                // 'sidebar_double' inverted section
                $value = $context->find('sidebar_double');
                if (empty($value)) {
                    
                    $buffer .= ' col-lg-4 col-xl-4 ';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbab17abd406f11cfd7dfa6e3657c1a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div
                    class="{{#disable_dashboard_drawer}} {{#sidebar_double}} col-lg-3 col-xl-3 {{/sidebar_double}} {{^sidebar_double}} col-lg-4 col-xl-4 {{/sidebar_double}}{{/disable_dashboard_drawer}} {{^disable_dashboard_drawer}}col-lg-4 col-xl-4 {{/disable_dashboard_drawer}}">
                    <div class="ccn-sidebar-region" aria-label="{{#str}}blocks{{/str}}">
                      {{{ sidepreblocks }}}
                    </div>
                  </div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <div
';
                $buffer .= $indent . '                    class="';
                // 'disable_dashboard_drawer' section
                $value = $context->find('disable_dashboard_drawer');
                $buffer .= $this->sectionB3c4c2ffaf0775e6a44d1fd4a46f3d44($context, $indent, $value);
                $buffer .= ' ';
                // 'disable_dashboard_drawer' inverted section
                $value = $context->find('disable_dashboard_drawer');
                if (empty($value)) {
                    
                    $buffer .= 'col-lg-4 col-xl-4 ';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="ccn-sidebar-region" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC31d5ba921972ecb0d6f53ba914207f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    {{{ blocks_fullwidth_bottom }}}
                  </div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('blocks_fullwidth_bottom'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section594644b43f41eedfedc914de6473d7f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  M.util.js_pending(\'theme_boost/loader\');
  require([\'theme_boost/loader\'], function() {
  M.util.js_complete(\'theme_boost/loader\');
  });
  M.util.js_pending(\'theme_boost/drawer\');
  require([\'theme_boost/drawer\'], function(mod) {
  mod.init();
  M.util.js_complete(\'theme_boost/drawer\');
  });
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '  require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '  mod.init();
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
