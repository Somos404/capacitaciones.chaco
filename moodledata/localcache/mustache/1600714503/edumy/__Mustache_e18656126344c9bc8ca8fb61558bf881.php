<?php

class __Mustache_e18656126344c9bc8ca8fb61558bf881 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'headertype_frontpage_only' section
        $value = $context->find('headertype_frontpage_only');
        $buffer .= $this->sectionDe39921fdc28436cf880bbb7a3a43b00($context, $indent, $value);
        // 'headertype_all_pages' section
        $value = $context->find('headertype_all_pages');
        $buffer .= $this->section95d1d3e03856a097d25279789f7dd783($context, $indent, $value);

        return $buffer;
    }

    private function section1749e74e4e4894c12054e935b33c0330(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_edumy/ccn_header_1 }}
      {{> theme_edumy/ccn_header_mob_1 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95db795894ca6a84940103adffeeb1ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_edumy/ccn_header_2 }}
      {{> theme_edumy/ccn_header_mob_2 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section926bd58ad6f3f864a4d88fefbb558846(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_edumy/ccn_header_3 }}
      {{> theme_edumy/ccn_header_mob_3 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0701ddf9e18a312760cdb51a7fd56b45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_edumy/ccn_header_4 }}
      {{> theme_edumy/ccn_header_mob_4 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f1c9a1e6fd07accc76065110700c892(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_edumy/ccn_header_5 }}
      {{> theme_edumy/ccn_header_mob_5 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45eed7f41439ec9af90ccdc7442c92a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_edumy/ccn_header_6 }}
      {{> theme_edumy/ccn_header_mob_6 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_6')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_6')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section850bcd0691fee3df1d9e749ac672fd66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_edumy/ccn_header_7 }}
      {{> theme_edumy/ccn_header_mob_7 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_7')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_7')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a992b02cf24132cffd8bf9007167151(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_edumy/ccn_header_8 }}
      {{> theme_edumy/ccn_header_mob_8 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5cd388372869c208efd7e4e01b33d7de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#header_1}}
      {{> theme_edumy/ccn_header_1 }}
      {{> theme_edumy/ccn_header_mob_1 }}
    {{/header_1}}
    {{#header_2}}
      {{> theme_edumy/ccn_header_2 }}
      {{> theme_edumy/ccn_header_mob_2 }}
    {{/header_2}}
    {{#header_3}}
      {{> theme_edumy/ccn_header_3 }}
      {{> theme_edumy/ccn_header_mob_3 }}
    {{/header_3}}
    {{#header_4}}
      {{> theme_edumy/ccn_header_4 }}
      {{> theme_edumy/ccn_header_mob_4 }}
    {{/header_4}}
    {{#header_5}}
      {{> theme_edumy/ccn_header_5 }}
      {{> theme_edumy/ccn_header_mob_5 }}
    {{/header_5}}
    {{#header_6}}
      {{> theme_edumy/ccn_header_6 }}
      {{> theme_edumy/ccn_header_mob_6 }}
    {{/header_6}}
    {{#header_7}}
      {{> theme_edumy/ccn_header_7 }}
      {{> theme_edumy/ccn_header_mob_7 }}
    {{/header_7}}
    {{#header_8}}
      {{> theme_edumy/ccn_header_8 }}
      {{> theme_edumy/ccn_header_mob_8 }}
    {{/header_8}}
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
                
                // 'header_1' section
                $value = $context->find('header_1');
                $buffer .= $this->section1749e74e4e4894c12054e935b33c0330($context, $indent, $value);
                // 'header_2' section
                $value = $context->find('header_2');
                $buffer .= $this->section95db795894ca6a84940103adffeeb1ff($context, $indent, $value);
                // 'header_3' section
                $value = $context->find('header_3');
                $buffer .= $this->section926bd58ad6f3f864a4d88fefbb558846($context, $indent, $value);
                // 'header_4' section
                $value = $context->find('header_4');
                $buffer .= $this->section0701ddf9e18a312760cdb51a7fd56b45($context, $indent, $value);
                // 'header_5' section
                $value = $context->find('header_5');
                $buffer .= $this->section8f1c9a1e6fd07accc76065110700c892($context, $indent, $value);
                // 'header_6' section
                $value = $context->find('header_6');
                $buffer .= $this->section45eed7f41439ec9af90ccdc7442c92a0($context, $indent, $value);
                // 'header_7' section
                $value = $context->find('header_7');
                $buffer .= $this->section850bcd0691fee3df1d9e749ac672fd66($context, $indent, $value);
                // 'header_8' section
                $value = $context->find('header_8');
                $buffer .= $this->section4a992b02cf24132cffd8bf9007167151($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe39921fdc28436cf880bbb7a3a43b00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{#is_frontpage}}
    {{#header_1}}
      {{> theme_edumy/ccn_header_1 }}
      {{> theme_edumy/ccn_header_mob_1 }}
    {{/header_1}}
    {{#header_2}}
      {{> theme_edumy/ccn_header_2 }}
      {{> theme_edumy/ccn_header_mob_2 }}
    {{/header_2}}
    {{#header_3}}
      {{> theme_edumy/ccn_header_3 }}
      {{> theme_edumy/ccn_header_mob_3 }}
    {{/header_3}}
    {{#header_4}}
      {{> theme_edumy/ccn_header_4 }}
      {{> theme_edumy/ccn_header_mob_4 }}
    {{/header_4}}
    {{#header_5}}
      {{> theme_edumy/ccn_header_5 }}
      {{> theme_edumy/ccn_header_mob_5 }}
    {{/header_5}}
    {{#header_6}}
      {{> theme_edumy/ccn_header_6 }}
      {{> theme_edumy/ccn_header_mob_6 }}
    {{/header_6}}
    {{#header_7}}
      {{> theme_edumy/ccn_header_7 }}
      {{> theme_edumy/ccn_header_mob_7 }}
    {{/header_7}}
    {{#header_8}}
      {{> theme_edumy/ccn_header_8 }}
      {{> theme_edumy/ccn_header_mob_8 }}
    {{/header_8}}
  {{/is_frontpage}}
  {{^is_frontpage}}
    {{> theme_edumy/ccn_header_1 }}
    {{> theme_edumy/ccn_header_mob_1 }}
  {{/is_frontpage}}
  {{> theme_edumy/ccn_modals }}
  {{> theme_edumy/ccn_breadcrumb }}
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
                
                // 'is_frontpage' section
                $value = $context->find('is_frontpage');
                $buffer .= $this->section5cd388372869c208efd7e4e01b33d7de($context, $indent, $value);
                // 'is_frontpage' inverted section
                $value = $context->find('is_frontpage');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_1')) {
                        $buffer .= $partial->renderInternal($context, $indent . '    ');
                    }
                    if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_1')) {
                        $buffer .= $partial->renderInternal($context, $indent . '    ');
                    }
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_modals')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_breadcrumb')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90bbc0eaeea1b89f911df6f612f001ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_edumy/ccn_header_1 }}
    {{> theme_edumy/ccn_header_mob_1 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b04db77d2b20e7032dd9e5c47844efb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_edumy/ccn_header_2 }}
    {{> theme_edumy/ccn_header_mob_2 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd2e48d8146c29c457ddb1451b94fc1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_edumy/ccn_header_3 }}
    {{> theme_edumy/ccn_header_mob_3 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section697d95cb6f8e975bf6643fa10b499e1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_edumy/ccn_header_4 }}
    {{> theme_edumy/ccn_header_mob_4 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section633f7e3739711e9e005695e0b420f1b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_edumy/ccn_header_5 }}
    {{> theme_edumy/ccn_header_mob_5 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d58fb9fb1d549dfadedb2a88fdae083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_edumy/ccn_header_6 }}
    {{> theme_edumy/ccn_header_mob_6 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_6')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_6')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66ab2b0e02aa9e44c9f7f0eac75733ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_edumy/ccn_header_7 }}
    {{> theme_edumy/ccn_header_mob_7 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_7')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_7')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30758ff1c243ffdc893399a505cdaf9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_edumy/ccn_header_8 }}
    {{> theme_edumy/ccn_header_mob_8 }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95d1d3e03856a097d25279789f7dd783(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{#header_1}}
    {{> theme_edumy/ccn_header_1 }}
    {{> theme_edumy/ccn_header_mob_1 }}
  {{/header_1}}
  {{#header_2}}
    {{> theme_edumy/ccn_header_2 }}
    {{> theme_edumy/ccn_header_mob_2 }}
  {{/header_2}}
  {{#header_3}}
    {{> theme_edumy/ccn_header_3 }}
    {{> theme_edumy/ccn_header_mob_3 }}
  {{/header_3}}
  {{#header_4}}
    {{> theme_edumy/ccn_header_4 }}
    {{> theme_edumy/ccn_header_mob_4 }}
  {{/header_4}}
  {{#header_5}}
    {{> theme_edumy/ccn_header_5 }}
    {{> theme_edumy/ccn_header_mob_5 }}
  {{/header_5}}
  {{#header_6}}
    {{> theme_edumy/ccn_header_6 }}
    {{> theme_edumy/ccn_header_mob_6 }}
  {{/header_6}}
  {{#header_7}}
    {{> theme_edumy/ccn_header_7 }}
    {{> theme_edumy/ccn_header_mob_7 }}
  {{/header_7}}
  {{#header_8}}
    {{> theme_edumy/ccn_header_8 }}
    {{> theme_edumy/ccn_header_mob_8 }}
  {{/header_8}}
  {{> theme_edumy/ccn_modals }}
  {{> theme_edumy/ccn_breadcrumb }}
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
                
                // 'header_1' section
                $value = $context->find('header_1');
                $buffer .= $this->section90bbc0eaeea1b89f911df6f612f001ac($context, $indent, $value);
                // 'header_2' section
                $value = $context->find('header_2');
                $buffer .= $this->section0b04db77d2b20e7032dd9e5c47844efb($context, $indent, $value);
                // 'header_3' section
                $value = $context->find('header_3');
                $buffer .= $this->sectionAd2e48d8146c29c457ddb1451b94fc1b($context, $indent, $value);
                // 'header_4' section
                $value = $context->find('header_4');
                $buffer .= $this->section697d95cb6f8e975bf6643fa10b499e1a($context, $indent, $value);
                // 'header_5' section
                $value = $context->find('header_5');
                $buffer .= $this->section633f7e3739711e9e005695e0b420f1b1($context, $indent, $value);
                // 'header_6' section
                $value = $context->find('header_6');
                $buffer .= $this->section3d58fb9fb1d549dfadedb2a88fdae083($context, $indent, $value);
                // 'header_7' section
                $value = $context->find('header_7');
                $buffer .= $this->section66ab2b0e02aa9e44c9f7f0eac75733ab($context, $indent, $value);
                // 'header_8' section
                $value = $context->find('header_8');
                $buffer .= $this->section30758ff1c243ffdc893399a505cdaf9d($context, $indent, $value);
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_modals')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_breadcrumb')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
