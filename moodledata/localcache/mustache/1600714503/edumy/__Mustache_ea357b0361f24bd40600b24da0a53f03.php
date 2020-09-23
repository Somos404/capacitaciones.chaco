<?php

class __Mustache_ea357b0361f24bd40600b24da0a53f03 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'breadcrumb_default' section
        $value = $context->find('breadcrumb_default');
        $buffer .= $this->section6653ff01ee15d25f11ab5b1d601585a0($context, $indent, $value);
        // 'breadcrumb_m' section
        $value = $context->find('breadcrumb_m');
        $buffer .= $this->sectionA3149daefbfc17c8dbe3365fbf9f6236($context, $indent, $value);
        // 'breadcrumb_s' section
        $value = $context->find('breadcrumb_s');
        $buffer .= $this->section8beec7ce89e1a66272c9a5d1422116c3($context, $indent, $value);
        // 'breadcrumb_xs' section
        $value = $context->find('breadcrumb_xs');
        $buffer .= $this->sectionFcfc2738de7fee137448e979c6103b1b($context, $indent, $value);
        // 'breadcrumb_hidden' section
        $value = $context->find('breadcrumb_hidden');
        $buffer .= $this->section0ea239abcb330fa9edb793c7b6e418de($context, $indent, $value);

        return $buffer;
    }

    private function section6653ff01ee15d25f11ab5b1d601585a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <section class="inner_page_breadcrumb {{{ breadcrumb_classes }}}">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-center">
          <div class="breadcrumb_content">
            <h4 class="breadcrumb_title">{{{ pageheading }}}</h4>
            {{{ output.navbar }}}
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
                
                $buffer .= $indent . '  <section class="inner_page_breadcrumb ';
                $value = $this->resolveValue($context->find('breadcrumb_classes'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '      <div class="row">
';
                $buffer .= $indent . '        <div class="col-xl-12 text-center">
';
                $buffer .= $indent . '          <div class="breadcrumb_content">
';
                $buffer .= $indent . '            <h4 class="breadcrumb_title">';
                $value = $this->resolveValue($context->find('pageheading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.navbar'), $context);
                $buffer .= $value;
                $buffer .= '
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3149daefbfc17c8dbe3365fbf9f6236(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <section class="inner_page_breadcrumb ccn_breadcrumb_m {{{ breadcrumb_classes }}}">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-center">
          <div class="breadcrumb_content">
            <h4 class="breadcrumb_title">{{{ pageheading }}}</h4>
            {{{ output.navbar }}}
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
                
                $buffer .= $indent . '  <section class="inner_page_breadcrumb ccn_breadcrumb_m ';
                $value = $this->resolveValue($context->find('breadcrumb_classes'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '      <div class="row">
';
                $buffer .= $indent . '        <div class="col-xl-12 text-center">
';
                $buffer .= $indent . '          <div class="breadcrumb_content">
';
                $buffer .= $indent . '            <h4 class="breadcrumb_title">';
                $value = $this->resolveValue($context->find('pageheading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.navbar'), $context);
                $buffer .= $value;
                $buffer .= '
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8beec7ce89e1a66272c9a5d1422116c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <section class="inner_page_breadcrumb ccn_breadcrumb_s {{{ breadcrumb_classes }}}">
    <div class="container">
      <div class="breadcrumb_content">
        <div class="row">
          <div class="col-xl-6">
            <h4 class="breadcrumb_title">{{{ pageheading }}}</h4>
          </div>
          <div class="col-xl-6">
            {{{ output.navbar }}}
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
                
                $buffer .= $indent . '  <section class="inner_page_breadcrumb ccn_breadcrumb_s ';
                $value = $this->resolveValue($context->find('breadcrumb_classes'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '      <div class="breadcrumb_content">
';
                $buffer .= $indent . '        <div class="row">
';
                $buffer .= $indent . '          <div class="col-xl-6">
';
                $buffer .= $indent . '            <h4 class="breadcrumb_title">';
                $value = $this->resolveValue($context->find('pageheading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '          <div class="col-xl-6">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.navbar'), $context);
                $buffer .= $value;
                $buffer .= '
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcfc2738de7fee137448e979c6103b1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <section class="inner_page_breadcrumb ccn_breadcrumb_s ccn_breadcrumb_xs {{{ breadcrumb_classes }}}">
    <div class="container">
      <div class="breadcrumb_content">
        <div class="row">
          <div class="col-xl-6">
            <h4 class="breadcrumb_title">{{{ pageheading }}}</h4>
          </div>
          <div class="col-xl-6">
            {{{ output.navbar }}}
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
                
                $buffer .= $indent . '  <section class="inner_page_breadcrumb ccn_breadcrumb_s ccn_breadcrumb_xs ';
                $value = $this->resolveValue($context->find('breadcrumb_classes'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '      <div class="breadcrumb_content">
';
                $buffer .= $indent . '        <div class="row">
';
                $buffer .= $indent . '          <div class="col-xl-6">
';
                $buffer .= $indent . '            <h4 class="breadcrumb_title">';
                $value = $this->resolveValue($context->find('pageheading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '          <div class="col-xl-6">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.navbar'), $context);
                $buffer .= $value;
                $buffer .= '
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ea239abcb330fa9edb793c7b6e418de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <section class="inner_page_breadcrumb ccn_breadcrumb_absent">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-center">
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
                
                $buffer .= $indent . '  <section class="inner_page_breadcrumb ccn_breadcrumb_absent">
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '      <div class="row">
';
                $buffer .= $indent . '        <div class="col-xl-12 text-center">
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
