<?php

class __Mustache_8713fc14ff3b48cd640cc1c7ddc4983a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'is_frontpage' section
        $value = $context->find('is_frontpage');
        $buffer .= $this->section8b2abcbaa5bebf3e40999b75ada41dab($context, $indent, $value);
        // 'is_frontpage' inverted section
        $value = $context->find('is_frontpage');
        if (empty($value)) {
            
            $buffer .= $indent . '  <section class="footer_one ';
            // 'footer_2' section
            $value = $context->find('footer_2');
            $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
            $buffer .= ' ';
            // 'footer_3' section
            $value = $context->find('footer_3');
            $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '    <div class="container">
';
            $buffer .= $indent . '      <div class="row">
';
            // 'footer_column_1' section
            $value = $context->find('footer_column_1');
            $buffer .= $this->sectionC98603c529cbf33e8b50b255b6d76fc5($context, $indent, $value);
            // 'footer_column_2' section
            $value = $context->find('footer_column_2');
            $buffer .= $this->sectionC5093a7efb06b6ce6471c4984207f2fc($context, $indent, $value);
            // 'footer_column_3' section
            $value = $context->find('footer_column_3');
            $buffer .= $this->sectionBc1add49ff6ca22a288f7d5fecbb40dd($context, $indent, $value);
            // 'footer_column_4' section
            $value = $context->find('footer_column_4');
            $buffer .= $this->sectionF3128eec78d5b8d8e8a8fa81389765e1($context, $indent, $value);
            // 'footer_column_5' section
            $value = $context->find('footer_column_5');
            $buffer .= $this->sectionD77a8122bf283a8ebdcd2a6fc186c69b($context, $indent, $value);
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '  </section>
';
            $buffer .= $indent . '  <section class="footer_middle_area p0 ';
            // 'footer_2' section
            $value = $context->find('footer_2');
            $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
            $buffer .= ' ';
            // 'footer_3' section
            $value = $context->find('footer_3');
            $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '    <div class="container">
';
            $buffer .= $indent . '      <div class="row">
';
            // 'logo_footer' section
            $value = $context->find('logo_footer');
            $buffer .= $this->section387d3cfb702d76ad36a1015e7bb35a5b($context, $indent, $value);
            // 'footer_menu' section
            $value = $context->find('footer_menu');
            $buffer .= $this->sectionD7c4cc9c13ee6c670e1cecb6e49e6fcf($context, $indent, $value);
            $buffer .= $indent . '        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 pb15 pt15">
';
            $buffer .= $indent . '          <div class="footer_social_widget mt15">
';
            $buffer .= $indent . '            <ul>
';
            if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_social_icons')) {
                $buffer .= $partial->renderInternal($context, $indent . '              ');
            }
            $buffer .= $indent . '            </ul>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '  </section>
';
            // 'cocoon_copyright' section
            $value = $context->find('cocoon_copyright');
            $buffer .= $this->section882ef5c248b0d6b24812a0c6b2093612($context, $indent, $value);
        }
        // 'back_to_top' section
        $value = $context->find('back_to_top');
        $buffer .= $this->section5aa096c8cddc0853fbe03993f81ba285($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'gmaps_key' section
        $value = $context->find('gmaps_key');
        $buffer .= $this->section1a7284b9d6e7de10ecdcf71b0f6e2bed($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('custom_js'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function sectionEbcb475427c7d7727fb30e127940463d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{logo_styles_footer}}}" ';
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
                $value = $this->resolveValue($context->find('logo_styles_footer'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a19a470f89eec2fc8a01d959dcefb49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>';
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
                
                $buffer .= '<img class="img-fluid" src="';
                $value = $this->resolveValue($context->find('footerlogo1'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'logo_styles_footer' section
                $value = $context->find('logo_styles_footer');
                $buffer .= $this->sectionEbcb475427c7d7727fb30e127940463d($context, $indent, $value);
                $buffer .= '>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section254d7600dae2d4e2af67ba2cfb1315f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span>{{ sitename }}</span>';
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
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdf0d17c01b9b86756f39d17fb144a65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div class="logo-widget home8 mb60">
                {{#logo_image_footer}}<img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
                {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
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
                
                $buffer .= $indent . '              <div class="logo-widget home8 mb60">
';
                $buffer .= $indent . '                ';
                // 'logo_image_footer' section
                $value = $context->find('logo_image_footer');
                $buffer .= $this->section4a19a470f89eec2fc8a01d959dcefb49($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'logotype_footer' section
                $value = $context->find('logotype_footer');
                $buffer .= $this->section254d7600dae2d4e2af67ba2cfb1315f4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e69dd7d444c6c21ef349b9f445ba355(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-lg-6 col-xl-6">
              <div class="copyright-widget text-center mt25">
                <p>{{{ cocoon_copyright }}}</p>
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
                
                $buffer .= $indent . '            <div class="col-lg-6 col-xl-6">
';
                $buffer .= $indent . '              <div class="copyright-widget text-center mt25">
';
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('cocoon_copyright'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e1f176f323689d442ba7516d149f98f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-lg-6 col-xl-6 pb25 pt25 text-right tac-smd">
              <div class="footer_menu_widget home3">
                {{{footer_menu}}}
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
                
                $buffer .= $indent . '            <div class="col-lg-6 col-xl-6 pb25 pt25 text-right tac-smd">
';
                $buffer .= $indent . '              <div class="footer_menu_widget home3">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footer_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB534d75587145f3cb2441e86e4191062(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <section class="footer_one home8 pb0">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            {{#logo_footer}}
              <div class="logo-widget home8 mb60">
                {{#logo_image_footer}}<img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
                {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
              </div>
            {{/logo_footer}}
            <div class="footer_contact_widget home8 text-center">
              {{{footer_col_1_body}}}
            </div>
            <div class="footer_social_widget home8 mt35 mb80">
              <ul>
                {{> theme_edumy/ccn_social_icons }}
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          {{#cocoon_copyright}}
            <div class="col-lg-6 col-xl-6">
              <div class="copyright-widget text-center mt25">
                <p>{{{ cocoon_copyright }}}</p>
              </div>
            </div>
          {{/cocoon_copyright}}
          {{#footer_menu}}
            <div class="col-lg-6 col-xl-6 pb25 pt25 text-right tac-smd">
              <div class="footer_menu_widget home3">
                {{{footer_menu}}}
              </div>
            </div>
          {{/footer_menu}}
        </div>
      </div>
    </section>
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
                
                $buffer .= $indent . '    <section class="footer_one home8 pb0">
';
                $buffer .= $indent . '      <div class="container">
';
                $buffer .= $indent . '        <div class="row">
';
                $buffer .= $indent . '          <div class="col-lg-6 offset-lg-3">
';
                // 'logo_footer' section
                $value = $context->find('logo_footer');
                $buffer .= $this->sectionEdf0d17c01b9b86756f39d17fb144a65($context, $indent, $value);
                $buffer .= $indent . '            <div class="footer_contact_widget home8 text-center">
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_1_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="footer_social_widget home8 mt35 mb80">
';
                $buffer .= $indent . '              <ul>
';
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_social_icons')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '              </ul>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="container">
';
                $buffer .= $indent . '        <div class="row">
';
                // 'cocoon_copyright' section
                $value = $context->find('cocoon_copyright');
                $buffer .= $this->section9e69dd7d444c6c21ef349b9f445ba355($context, $indent, $value);
                // 'footer_menu' section
                $value = $context->find('footer_menu');
                $buffer .= $this->section3e1f176f323689d442ba7516d149f98f($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a692bf08ebe51309ec5e08ade36c4aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' home3 ';
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
                
                $buffer .= ' home3 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section917d0f0e8f509bc19f4c2cfd238caac1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' home4 ';
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
                
                $buffer .= ' home4 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB294b1c99b538ed1b9aa58b5dcf5b801(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="{{{footer_col_1_class}}}">
              <div class="footer_contact_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_1_title }}}</h4>
                {{{ footer_col_1_body }}}
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
                
                $buffer .= $indent . '            <div class="';
                $value = $this->resolveValue($context->find('footer_col_1_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '              <div class="footer_contact_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <h4>';
                $value = $this->resolveValue($context->find('footer_col_1_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footer_col_1_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cf40547be403120f677eff79cc7a97d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="{{{footer_col_2_class}}}">
              <div class="footer_company_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_2_title }}}</h4>
                {{{ footer_col_2_body }}}
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
                
                $buffer .= $indent . '            <div class="';
                $value = $this->resolveValue($context->find('footer_col_2_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '              <div class="footer_company_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <h4>';
                $value = $this->resolveValue($context->find('footer_col_2_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footer_col_2_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section958627d9c21c856062aab5c2c691e69f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="{{{footer_col_3_class}}}">
              <div class="footer_program_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_3_title }}}</h4>
                {{{ footer_col_3_body }}}
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
                
                $buffer .= $indent . '            <div class="';
                $value = $this->resolveValue($context->find('footer_col_3_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '              <div class="footer_program_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <h4>';
                $value = $this->resolveValue($context->find('footer_col_3_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footer_col_3_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section463284862bc9cde17ea19cd0c4ddcec1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="{{{footer_col_4_class}}}">
              <div class="footer_support_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_4_title }}}</h4>
                {{{ footer_col_4_body }}}
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
                
                $buffer .= $indent . '            <div class="';
                $value = $this->resolveValue($context->find('footer_col_4_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '              <div class="footer_support_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <h4>';
                $value = $this->resolveValue($context->find('footer_col_4_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footer_col_4_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b66e02f5d088c9093a281790c648c7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="{{{footer_col_5_class}}}">
              <div class="footer_apps_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_5_title }}}</h4>
                {{{ footer_col_5_body }}}
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
                
                $buffer .= $indent . '            <div class="';
                $value = $this->resolveValue($context->find('footer_col_5_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '              <div class="footer_apps_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <h4>';
                $value = $this->resolveValue($context->find('footer_col_5_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footer_col_5_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB12784031803f53105160b71bcba2487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-md-3 col-lg-3 col-xl-3';
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
                
                $buffer .= 'col-md-3 col-lg-3 col-xl-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1633f950c0b31f366850a00b0a0a5f57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' home1 ';
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
                
                $buffer .= ' home1 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06b0d7f0150745c41938da77afaa3d43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>';
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
                
                $buffer .= ' <img class="img-fluid" src="';
                $value = $this->resolveValue($context->find('footerlogo1'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'logo_styles_footer' section
                $value = $context->find('logo_styles_footer');
                $buffer .= $this->sectionEbcb475427c7d7727fb30e127940463d($context, $indent, $value);
                $buffer .= '>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB38ad0d718ca38bab6e5d96b500fc894(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-sm-4 {{#logotype_footer}}col-md-3 col-lg-3 col-xl-3{{/logotype_footer}}{{^logotype_footer}}col-md-1 mr25{{/logotype_footer}} pb15 pt15">
              <div class="logo-widget {{#footer_1}} home1 {{/footer_1}}  {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home3 {{/footer_3}}">
                {{#logo_image_footer}} <img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
                {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
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
                
                $buffer .= $indent . '            <div class="col-sm-4 ';
                // 'logotype_footer' section
                $value = $context->find('logotype_footer');
                $buffer .= $this->sectionB12784031803f53105160b71bcba2487($context, $indent, $value);
                // 'logotype_footer' inverted section
                $value = $context->find('logotype_footer');
                if (empty($value)) {
                    
                    $buffer .= 'col-md-1 mr25';
                }
                $buffer .= ' pb15 pt15">
';
                $buffer .= $indent . '              <div class="logo-widget ';
                // 'footer_1' section
                $value = $context->find('footer_1');
                $buffer .= $this->section1633f950c0b31f366850a00b0a0a5f57($context, $indent, $value);
                $buffer .= '  ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                // 'logo_image_footer' section
                $value = $context->find('logo_image_footer');
                $buffer .= $this->section06b0d7f0150745c41938da77afaa3d43($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'logotype_footer' section
                $value = $context->find('logotype_footer');
                $buffer .= $this->section254d7600dae2d4e2af67ba2cfb1315f4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE28b7598a1085c7b4dc4b2880028d393(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
              <div class="footer_menu_widget">
                {{{footer_menu}}}
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
                
                $buffer .= $indent . '            <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
';
                $buffer .= $indent . '              <div class="footer_menu_widget">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footer_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section143cf13518735b41ad0ddfff23da5546(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <section class="footer_bottom_area pt25 pb25 {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="copyright-widget text-center">
                <p>{{{ cocoon_copyright }}}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
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
                
                $buffer .= $indent . '      <section class="footer_bottom_area pt25 pb25 ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '          <div class="row">
';
                $buffer .= $indent . '            <div class="col-lg-6 offset-lg-3">
';
                $buffer .= $indent . '              <div class="copyright-widget text-center">
';
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('cocoon_copyright'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b2abcbaa5bebf3e40999b75ada41dab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{#footer_4}}
    <section class="footer_one home8 pb0">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            {{#logo_footer}}
              <div class="logo-widget home8 mb60">
                {{#logo_image_footer}}<img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
                {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
              </div>
            {{/logo_footer}}
            <div class="footer_contact_widget home8 text-center">
              {{{footer_col_1_body}}}
            </div>
            <div class="footer_social_widget home8 mt35 mb80">
              <ul>
                {{> theme_edumy/ccn_social_icons }}
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          {{#cocoon_copyright}}
            <div class="col-lg-6 col-xl-6">
              <div class="copyright-widget text-center mt25">
                <p>{{{ cocoon_copyright }}}</p>
              </div>
            </div>
          {{/cocoon_copyright}}
          {{#footer_menu}}
            <div class="col-lg-6 col-xl-6 pb25 pt25 text-right tac-smd">
              <div class="footer_menu_widget home3">
                {{{footer_menu}}}
              </div>
            </div>
          {{/footer_menu}}
        </div>
      </div>
    </section>
  {{/footer_4}}
  {{^footer_4}}
    <section class="footer_one {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
      <div class="container">
        <div class="row">
          {{#footer_column_1}}
            <div class="{{{footer_col_1_class}}}">
              <div class="footer_contact_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_1_title }}}</h4>
                {{{ footer_col_1_body }}}
              </div>
            </div>
          {{/footer_column_1}}
          {{#footer_column_2}}
            <div class="{{{footer_col_2_class}}}">
              <div class="footer_company_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_2_title }}}</h4>
                {{{ footer_col_2_body }}}
              </div>
            </div>
          {{/footer_column_2}}
          {{#footer_column_3}}
            <div class="{{{footer_col_3_class}}}">
              <div class="footer_program_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_3_title }}}</h4>
                {{{ footer_col_3_body }}}
              </div>
            </div>
          {{/footer_column_3}}
          {{#footer_column_4}}
            <div class="{{{footer_col_4_class}}}">
              <div class="footer_support_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_4_title }}}</h4>
                {{{ footer_col_4_body }}}
              </div>
            </div>
          {{/footer_column_4}}
          {{#footer_column_5}}
            <div class="{{{footer_col_5_class}}}">
              <div class="footer_apps_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
                <h4>{{{ footer_col_5_title }}}</h4>
                {{{ footer_col_5_body }}}
              </div>
            </div>
          {{/footer_column_5}}
        </div>
      </div>
    </section>
    <section class="footer_middle_area p0 {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
      <div class="container">
        <div class="row">
          {{#logo_footer}}
            <div class="col-sm-4 {{#logotype_footer}}col-md-3 col-lg-3 col-xl-3{{/logotype_footer}}{{^logotype_footer}}col-md-1 mr25{{/logotype_footer}} pb15 pt15">
              <div class="logo-widget {{#footer_1}} home1 {{/footer_1}}  {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home3 {{/footer_3}}">
                {{#logo_image_footer}} <img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
                {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
              </div>
            </div>
          {{/logo_footer}}
          {{#footer_menu}}
            <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
              <div class="footer_menu_widget">
                {{{footer_menu}}}
              </div>
            </div>
          {{/footer_menu}}
          <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 pb15 pt15">
            <div class="footer_social_widget mt15">
              <ul>
                {{> theme_edumy/ccn_social_icons }}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{#cocoon_copyright}}
      <section class="footer_bottom_area pt25 pb25 {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="copyright-widget text-center">
                <p>{{{ cocoon_copyright }}}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    {{/cocoon_copyright}}
  {{/footer_4}}
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
                
                // 'footer_4' section
                $value = $context->find('footer_4');
                $buffer .= $this->sectionB534d75587145f3cb2441e86e4191062($context, $indent, $value);
                // 'footer_4' inverted section
                $value = $context->find('footer_4');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <section class="footer_one ';
                    // 'footer_2' section
                    $value = $context->find('footer_2');
                    $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                    $buffer .= ' ';
                    // 'footer_3' section
                    $value = $context->find('footer_3');
                    $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '      <div class="container">
';
                    $buffer .= $indent . '        <div class="row">
';
                    // 'footer_column_1' section
                    $value = $context->find('footer_column_1');
                    $buffer .= $this->sectionB294b1c99b538ed1b9aa58b5dcf5b801($context, $indent, $value);
                    // 'footer_column_2' section
                    $value = $context->find('footer_column_2');
                    $buffer .= $this->section0cf40547be403120f677eff79cc7a97d($context, $indent, $value);
                    // 'footer_column_3' section
                    $value = $context->find('footer_column_3');
                    $buffer .= $this->section958627d9c21c856062aab5c2c691e69f($context, $indent, $value);
                    // 'footer_column_4' section
                    $value = $context->find('footer_column_4');
                    $buffer .= $this->section463284862bc9cde17ea19cd0c4ddcec1($context, $indent, $value);
                    // 'footer_column_5' section
                    $value = $context->find('footer_column_5');
                    $buffer .= $this->section0b66e02f5d088c9093a281790c648c7b($context, $indent, $value);
                    $buffer .= $indent . '        </div>
';
                    $buffer .= $indent . '      </div>
';
                    $buffer .= $indent . '    </section>
';
                    $buffer .= $indent . '    <section class="footer_middle_area p0 ';
                    // 'footer_2' section
                    $value = $context->find('footer_2');
                    $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                    $buffer .= ' ';
                    // 'footer_3' section
                    $value = $context->find('footer_3');
                    $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '      <div class="container">
';
                    $buffer .= $indent . '        <div class="row">
';
                    // 'logo_footer' section
                    $value = $context->find('logo_footer');
                    $buffer .= $this->sectionB38ad0d718ca38bab6e5d96b500fc894($context, $indent, $value);
                    // 'footer_menu' section
                    $value = $context->find('footer_menu');
                    $buffer .= $this->sectionE28b7598a1085c7b4dc4b2880028d393($context, $indent, $value);
                    $buffer .= $indent . '          <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 pb15 pt15">
';
                    $buffer .= $indent . '            <div class="footer_social_widget mt15">
';
                    $buffer .= $indent . '              <ul>
';
                    if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_social_icons')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                    $buffer .= $indent . '              </ul>
';
                    $buffer .= $indent . '            </div>
';
                    $buffer .= $indent . '          </div>
';
                    $buffer .= $indent . '        </div>
';
                    $buffer .= $indent . '      </div>
';
                    $buffer .= $indent . '    </section>
';
                    // 'cocoon_copyright' section
                    $value = $context->find('cocoon_copyright');
                    $buffer .= $this->section143cf13518735b41ad0ddfff23da5546($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC98603c529cbf33e8b50b255b6d76fc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_1_class}}}">
            <div class="footer_contact_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
              <h4>{{{ footer_col_1_title }}}</h4>
              {{{ footer_col_1_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_1_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_contact_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_1_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_1_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5093a7efb06b6ce6471c4984207f2fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_2_class}}}">
            <div class="footer_company_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
              <h4>{{{ footer_col_2_title }}}</h4>
              {{{ footer_col_2_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_2_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_company_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_2_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_2_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc1add49ff6ca22a288f7d5fecbb40dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_3_class}}}">
            <div class="footer_program_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
              <h4>{{{ footer_col_3_title }}}</h4>
              {{{ footer_col_3_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_3_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_program_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_3_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_3_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3128eec78d5b8d8e8a8fa81389765e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_4_class}}}">
            <div class="footer_support_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
              <h4>{{{ footer_col_4_title }}}</h4>
              {{{ footer_col_4_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_4_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_support_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_4_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_4_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD77a8122bf283a8ebdcd2a6fc186c69b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_5_class}}}">
            <div class="footer_apps_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
              <h4>{{{ footer_col_5_title }}}</h4>
              {{{ footer_col_5_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_5_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_apps_widget ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_5_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_5_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section387d3cfb702d76ad36a1015e7bb35a5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="col-sm-4 {{#logotype_footer}}col-md-3 col-lg-3 col-xl-3{{/logotype_footer}}{{^logotype_footer}}col-md-1 mr25{{/logotype_footer}} pb15 pt15">
            <div class="logo-widget {{#footer_1}} home1 {{/footer_1}}  {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home3 {{/footer_3}}">
              {{#logo_image_footer}}<img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
              {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
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
                
                $buffer .= $indent . '          <div class="col-sm-4 ';
                // 'logotype_footer' section
                $value = $context->find('logotype_footer');
                $buffer .= $this->sectionB12784031803f53105160b71bcba2487($context, $indent, $value);
                // 'logotype_footer' inverted section
                $value = $context->find('logotype_footer');
                if (empty($value)) {
                    
                    $buffer .= 'col-md-1 mr25';
                }
                $buffer .= ' pb15 pt15">
';
                $buffer .= $indent . '            <div class="logo-widget ';
                // 'footer_1' section
                $value = $context->find('footer_1');
                $buffer .= $this->section1633f950c0b31f366850a00b0a0a5f57($context, $indent, $value);
                $buffer .= '  ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              ';
                // 'logo_image_footer' section
                $value = $context->find('logo_image_footer');
                $buffer .= $this->section4a19a470f89eec2fc8a01d959dcefb49($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              ';
                // 'logotype_footer' section
                $value = $context->find('logotype_footer');
                $buffer .= $this->section254d7600dae2d4e2af67ba2cfb1315f4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7c4cc9c13ee6c670e1cecb6e49e6fcf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 text-center">
            <div class="footer_menu_widget">
              {{{footer_menu}}}
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
                
                $buffer .= $indent . '          <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 text-center">
';
                $buffer .= $indent . '            <div class="footer_menu_widget">
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section882ef5c248b0d6b24812a0c6b2093612(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <section class="footer_bottom_area pt25 pb25 {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="copyright-widget text-center">
              <p>{{{ cocoon_copyright }}}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
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
                
                $buffer .= $indent . '    <section class="footer_bottom_area pt25 pb25 ';
                // 'footer_2' section
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                // 'footer_3' section
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '      <div class="container">
';
                $buffer .= $indent . '        <div class="row">
';
                $buffer .= $indent . '          <div class="col-lg-6 offset-lg-3">
';
                $buffer .= $indent . '            <div class="copyright-widget text-center">
';
                $buffer .= $indent . '              <p>';
                $value = $this->resolveValue($context->find('cocoon_copyright'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5aa096c8cddc0853fbe03993f81ba285(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
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
                
                $buffer .= $indent . '  <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a7284b9d6e7de10ecdcf71b0f6e2bed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <script src="//maps.googleapis.com/maps/api/js?key={{gmaps_key}}"></script>
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
                
                $buffer .= $indent . '  <script src="//maps.googleapis.com/maps/api/js?key=';
                $value = $this->resolveValue($context->find('gmaps_key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
