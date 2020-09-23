<?php

class __Mustache_2ec25bfe8b020c8bd168737728ce3524 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="';
        // 'hidden' section
        $value = $context->find('hidden');
        $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' ';
        // 'hascontrols' section
        $value = $context->find('hascontrols');
        $buffer .= $this->section12f3cb4be977f05616300fd1301c564b($context, $indent, $value);
        $buffer .= '" role="';
        $value = $this->resolveValue($context->find('ariarole'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-block="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        // 'arialabel' section
        $value = $context->find('arialabel');
        $buffer .= $this->sectionDb14b0433b75775f6950a398f9e5ea76($context, $indent, $value);
        $buffer .= ' ';
        // 'arialabel' inverted section
        $value = $context->find('arialabel');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '  ';
            // 'hascontrols' section
            $value = $context->find('hascontrols');
            $buffer .= $this->section27d026ff9e47a4aa109bbd48282ecb55($context, $indent, $value);
            $buffer .= ' ';
        }
        $buffer .= ' style="';
        $value = $this->resolveValue($context->find('ccn_style'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        // 'showskiplink' section
        $value = $context->find('showskiplink');
        $buffer .= $this->section501ef804c92c5d19e54dc012d0594119($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->section90c4421dd07507d072f0f1d8f84ddc9b($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hascontrols' section
        $value = $context->find('hascontrols');
        $buffer .= $this->section2cee69e781a7be9db2fe97fa8daf4c92($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('annotation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        // 'showskiplink' section
        $value = $context->find('showskiplink');
        $buffer .= $this->section86d94a2947bb1f44baa191a3197437e1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9a7fc588e5e2ac7453379d33a752316e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden';
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
                
                $buffer .= 'hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12f3cb4be977f05616300fd1301c564b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block_with_controls';
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
                
                $buffer .= 'block_with_controls';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6443b7c1cd72c62cb76e0217440a25a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{arialabel}}}';
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
                
                $value = $this->resolveValue($context->find('arialabel'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb14b0433b75775f6950a398f9e5ea76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-label={{#quote}}{{{arialabel}}}{{/quote}} ';
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
                
                $buffer .= ' aria-label=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section6443b7c1cd72c62cb76e0217440a25a3($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA475f296584083f606e1fbb3973c6748(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-labelledby="instance-{{blockinstanceid}}-header" ';
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
                
                $buffer .= ' aria-labelledby="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-header" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27d026ff9e47a4aa109bbd48282ecb55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#title}} aria-labelledby="instance-{{blockinstanceid}}-header" {{/title}} ';
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
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->sectionA475f296584083f606e1fbb3973c6748($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB72e1405931a305b04da0656eec2aca0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'skipa, access, {{title}}';
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
                
                $buffer .= 'skipa, access, ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section501ef804c92c5d19e54dc012d0594119(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="#sb-{{skipid}}" class="sr-only sr-only-focusable">{{#str}}skipa, access, {{title}}{{/str}}</a>
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
                
                $buffer .= $indent . '    <a href="#sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="sr-only sr-only-focusable">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB72e1405931a305b04da0656eec2aca0($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90c4421dd07507d072f0f1d8f84ddc9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

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
                
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cee69e781a7be9db2fe97fa8daf4c92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span id="instance-{{blockinstanceid}}-header" class="hidden ccn-hidden">{{{title}}}</span>
    <div class="block-controls header">
      {{{controls}}}
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
                
                $buffer .= $indent . '    <span id="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-header" class="hidden ccn-hidden">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '    <div class="block-controls header">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('controls'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86d94a2947bb1f44baa191a3197437e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span id="sb-{{skipid}}"></span>
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
                
                $buffer .= $indent . '    <span id="sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
