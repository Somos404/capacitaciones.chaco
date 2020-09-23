<?php

class __Mustache_9c2ec9e396b25407a9905a357bf6ec58 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="page" class="stylehome1 h0">
';
        $buffer .= $indent . '  <div class="mobile-menu">
';
        $buffer .= $indent . '    <div class="header stylehome1">
';
        // 'logo' section
        $value = $context->find('logo');
        $buffer .= $this->section65d308ddd39d006357308fdba9235d7e($context, $indent, $value);
        $buffer .= $indent . '      <ul class="menu_bar_home2">
';
        // 'header_search_icon' section
        $value = $context->find('header_search_icon');
        $buffer .= $this->section0bb4d889d01295f81af5db5db95d5447($context, $indent, $value);
        $buffer .= $indent . '        <li class="list-inline-item ccn_mob_menu_trigger ';
        // 'header_search_icon' inverted section
        $value = $context->find('header_search_icon');
        if (empty($value)) {
            
            $buffer .= ' ccn_mob_menu_trigger_standalone ';
        }
        $buffer .= '"><a href="#menu"><span></span></a></li>
';
        $buffer .= $indent . '      </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div><!-- /.mobile-menu -->
';
        $buffer .= $indent . '  <nav id="menu" class="stylehome1">
';
        $buffer .= $indent . '    <ul>
';
        $buffer .= $indent . '      ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_user')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        // 'phone' section
        $value = $context->find('phone');
        $buffer .= $this->section910248f4fe244ef5c9aad36a2515750e($context, $indent, $value);
        // 'email_address' section
        $value = $context->find('email_address');
        $buffer .= $this->section9621f17229be4278dc7b6852a7b0bb7a($context, $indent, $value);
        // 'cta_link' section
        $value = $context->find('cta_link');
        $buffer .= $this->sectionCfaee8164ea5e2fef468e14ffbeb9fc0($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '  </nav>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF4ae517f1e51da61f377c3a37c32b2b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{logo_styles}}}" ';
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
                
                $buffer .= ' style="';
                $value = $this->resolveValue($context->find('logo_styles'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f2b72c24bf9e11d91e4f1e6d0200cb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img class="nav_logo_img img-fluid float-left mt20" src="{{{headerlogo1}}}" alt="{{{sitename}}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>';
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
                
                $buffer .= '<img class="nav_logo_img img-fluid float-left mt20" src="';
                $value = $this->resolveValue($context->find('headerlogo1'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'logo_styles' section
                $value = $context->find('logo_styles');
                $buffer .= $this->sectionF4ae517f1e51da61f377c3a37c32b2b7($context, $indent, $value);
                $buffer .= '>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9f2d3a9498e7d8c18d9510e8a8d96ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span>{{{sitename}}}</span>';
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
                
                $buffer .= '<span>';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= $value;
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65d308ddd39d006357308fdba9235d7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="main_logo_home2">
          <a class="mobileBrand" href="{{{ config.wwwroot }}}">
            {{#logo_image}}<img class="nav_logo_img img-fluid float-left mt20" src="{{{headerlogo1}}}" alt="{{{sitename}}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>{{/logo_image}}
            {{#logotype}}<span>{{{sitename}}}</span>{{/logotype}}
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
                
                $buffer .= $indent . '        <div class="main_logo_home2">
';
                $buffer .= $indent . '          <a class="mobileBrand" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'logo_image' section
                $value = $context->find('logo_image');
                $buffer .= $this->section2f2b72c24bf9e11d91e4f1e6d0200cb3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                // 'logotype' section
                $value = $context->find('logotype');
                $buffer .= $this->sectionF9f2d3a9498e7d8c18d9510e8a8d96ee($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bb4d889d01295f81af5db5db95d5447(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <li class="list-inline-item">
            <div class="search_overlay">
              <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
              </a>
            </div>
          </li>
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
                
                $buffer .= $indent . '          <li class="list-inline-item">
';
                $buffer .= $indent . '            <div class="search_overlay">
';
                $buffer .= $indent . '              <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
';
                $buffer .= $indent . '                <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
';
                $buffer .= $indent . '              </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section910248f4fe244ef5c9aad36a2515750e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="ccn_mob_menu_iconed"><a href="tel:{{{phone}}}"><i class="flaticon-phone-call"></i> {{{phone}}}</a></li>
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
                
                $buffer .= $indent . '        <li class="ccn_mob_menu_iconed"><a href="tel:';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="flaticon-phone-call"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9621f17229be4278dc7b6852a7b0bb7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="ccn_mob_menu_iconed"><a href="mailto:{{{email_address}}}"><i class="flaticon-paper-plane"></i> {{{email_address}}}</a></li>
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
                
                $buffer .= $indent . '        <li class="ccn_mob_menu_iconed"><a href="mailto:';
                $value = $this->resolveValue($context->find('email_address'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="flaticon-paper-plane"></i> ';
                $value = $this->resolveValue($context->find('email_address'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfaee8164ea5e2fef468e14ffbeb9fc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="ccn_mob_menu_iconed"><a href="{{{cta_link}}}" class=""><i class="flaticon-megaphone"></i> {{{cta_text}}}</a></li>
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
                
                $buffer .= $indent . '        <li class="ccn_mob_menu_iconed"><a href="';
                $value = $this->resolveValue($context->find('cta_link'), $context);
                $buffer .= $value;
                $buffer .= '" class=""><i class="flaticon-megaphone"></i> ';
                $value = $this->resolveValue($context->find('cta_text'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
