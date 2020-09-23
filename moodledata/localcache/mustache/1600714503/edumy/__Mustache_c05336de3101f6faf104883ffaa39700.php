<?php

class __Mustache_c05336de3101f6faf104883ffaa39700 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="candidate_revew_search_box course mb30 fn-520">
';
        $buffer .= $indent . '  <form action="';
        $value = $this->resolveValue($context->find('searchurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="get" class="form-inline my-2 my-lg-0">
';
        $buffer .= $indent . '    <input id="';
        $value = $this->resolveValue($context->find('inputid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" name="search" type="text" size="';
        $value = $this->resolveValue($context->find('inputsize'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="form-control mr-sm-2" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6bc0c67b4cee8f14c9b0df0f61d406a7($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
';
        $buffer .= $indent . '  </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6bc0c67b4cee8f14c9b0df0f61d406a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search_courses, theme_edumy';
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
                
                $buffer .= 'search_courses, theme_edumy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
