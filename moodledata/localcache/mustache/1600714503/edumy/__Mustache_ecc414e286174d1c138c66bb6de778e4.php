<?php

class __Mustache_ecc414e286174d1c138c66bb6de778e4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'tagscount' section
        $value = $context->find('tagscount');
        $buffer .= $this->sectionDbc0ee66ca13a5abf4904975f22e860f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section33e66d938e28bd0bf1fbb26c634e4d20($context, $indent, $value);

        return $buffer;
    }

    private function section0e0f2eb7961108693ad492b79b9e3ac6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span>{{name}}</span></a>
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
                
                $buffer .= $indent . '                    <span>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9a6e10533b7b57d40c977e2ef1f7e8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>
                <a href="{{viewurl}}" >
                {{#flag}}
                    <span>{{name}}</span></a>
                {{/flag}}
                {{^flag}}
                    {{name}}</a>
                {{/flag}}
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
                
                $buffer .= $indent . '            <li>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" >
';
                // 'flag' section
                $value = $context->find('flag');
                $buffer .= $this->section0e0f2eb7961108693ad492b79b9e3ac6($context, $indent, $value);
                // 'flag' inverted section
                $value = $context->find('flag');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                }
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88b25ad7fde04eac92bb3043d7e6ed40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moretags, core_tag';
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
                
                $buffer .= 'moretags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c41e879729f0a186e15bde6fbb7ab5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lesstags, core_tag';
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
                
                $buffer .= 'lesstags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40e9b5dae5b1aca71f88038434c2e0a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="visibleifjs">
                <a href="#" class="tagmorelink">{{#str}}moretags, core_tag{{/str}}</a>
            </li>
            <li class="visibleifjs">
                <a href="#" class="taglesslink">{{#str}}lesstags, core_tag{{/str}}</a>
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
                
                $buffer .= $indent . '            <li class="visibleifjs">
';
                $buffer .= $indent . '                <a href="#" class="tagmorelink">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section88b25ad7fde04eac92bb3043d7e6ed40($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $buffer .= $indent . '            <li class="visibleifjs">
';
                $buffer .= $indent . '                <a href="#" class="taglesslink">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5c41e879729f0a186e15bde6fbb7ab5d($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbc0ee66ca13a5abf4904975f22e860f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul class="ccn_tags">
        {{#tags}}
            <li>
                <a href="{{viewurl}}" >
                {{#flag}}
                    <span>{{name}}</span></a>
                {{/flag}}
                {{^flag}}
                    {{name}}</a>
                {{/flag}}
            </li>
        {{/tags}}
        {{#overflow}}
            <li class="visibleifjs">
                <a href="#" class="tagmorelink">{{#str}}moretags, core_tag{{/str}}</a>
            </li>
            <li class="visibleifjs">
                <a href="#" class="taglesslink">{{#str}}lesstags, core_tag{{/str}}</a>
            </li>
        {{/overflow}}
    </ul>
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
                
                $buffer .= $indent . '    <ul class="ccn_tags">
';
                // 'tags' section
                $value = $context->find('tags');
                $buffer .= $this->sectionF9a6e10533b7b57d40c977e2ef1f7e8e($context, $indent, $value);
                // 'overflow' section
                $value = $context->find('overflow');
                $buffer .= $this->section40e9b5dae5b1aca71f88038434c2e0a5($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33e66d938e28bd0bf1fbb26c634e4d20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    $(\'.tag_list .tagmorelink\').click(function(e) {
        e.preventDefault();
        $(this).closest(\'.tag_list\').removeClass(\'hideoverlimit\');
    });
    $(\'.tag_list .taglesslink\').click(function(e) {
        e.preventDefault();
        $(this).closest(\'.tag_list\').addClass(\'hideoverlimit\');
    });
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
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(\'.tag_list .tagmorelink\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        $(this).closest(\'.tag_list\').removeClass(\'hideoverlimit\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    $(\'.tag_list .taglesslink\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        $(this).closest(\'.tag_list\').addClass(\'hideoverlimit\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
