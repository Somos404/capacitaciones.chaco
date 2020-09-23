<?php

class __Mustache_32cd1bea378670d83205b9c3be41c6f4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="forumsearch">
';
        $buffer .= $indent . '    <form action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="form-inline">
';
        $buffer .= $indent . '        <input type="hidden" name="id" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="input-group">
';
        $buffer .= $indent . '            <label class="sr-only" for="search">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA3cc1a6d42680c1ad3eb5c6ab7d0ecf1($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <input id="search" name="search" type="text" class="form-control" value="';
        $value = $this->resolveValue($context->find('query'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA3cc1a6d42680c1ad3eb5c6ab7d0ecf1($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="input-group-append">
';
        $buffer .= $indent . '            <button class="btn btn-outline-secondary" id="searchforums" type="submit"><span class="flaticon-magnifying-glass"></span></button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA3cc1a6d42680c1ad3eb5c6ab7d0ecf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, forum';
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
                
                $buffer .= 'search, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
