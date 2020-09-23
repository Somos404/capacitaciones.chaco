<?php

class __Mustache_4a18300680c7cf0f2273acc16729163c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="block-myoverview-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="my_course_content_container block-myoverview block-cards" data-region="myoverview" role="navigation">
';
        $buffer .= $indent . '  <div class="my_course_content mb30">
';
        $buffer .= $indent . '    <div class="my_course_content_header">
';
        $buffer .= $indent . '      <div class="col-xl-4">
';
        $buffer .= $indent . '        <div class="instructor_search_result style2">
';
        $buffer .= $indent . '          <h4 class="mt10">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF870cf92426deaef3e90c68f33111c89($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="col-xl-8">
';
        $buffer .= $indent . '        <div class="candidate_revew_select style2 text-right" data-region="filter" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6dacaeff51ba425cb4a640a8ca853997($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '          <ul class="mb0">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/nav-grouping-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('block_myoverview/nav-sort-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="container-fluid p-0">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/courses-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section8dacc2fd870b72b2bc1e8aabdb6a5b0d($context, $indent, $value);

        return $buffer;
    }

    private function sectionF870cf92426deaef3e90c68f33111c89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courses';
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
                
                $buffer .= 'courses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dacaeff51ba425cb4a640a8ca853997(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:controls, block_myoverview ';
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
                
                $buffer .= ' aria:controls, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8dacc2fd870b72b2bc1e8aabdb6a5b0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  require(
  [
  \'jquery\',
  \'block_myoverview/main\',
  ],
  function(
  $,
  Main
  ) {
  var root = $(\'#block-myoverview-{{uniqid}}\');
  Main.init(root);
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
                
                $buffer .= $indent . '  require(
';
                $buffer .= $indent . '  [
';
                $buffer .= $indent . '  \'jquery\',
';
                $buffer .= $indent . '  \'block_myoverview/main\',
';
                $buffer .= $indent . '  ],
';
                $buffer .= $indent . '  function(
';
                $buffer .= $indent . '  $,
';
                $buffer .= $indent . '  Main
';
                $buffer .= $indent . '  ) {
';
                $buffer .= $indent . '  var root = $(\'#block-myoverview-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '  Main.init(root);
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
