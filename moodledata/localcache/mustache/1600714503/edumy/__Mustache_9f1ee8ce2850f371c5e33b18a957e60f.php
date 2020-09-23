<?php

class __Mustache_9f1ee8ce2850f371c5e33b18a957e60f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/popover_region')) {
            $context->pushBlockContext(array(
                'classes' => array($this, 'blockB1e43e9f92348ef3adc1b123f692e85a'),
                'attributes' => array($this, 'block482ca75dccfae1b08a5672a2d0d15643'),
                'togglelabel' => array($this, 'block5d95ab626acc680a1ab0ba1aecd871b1'),
                'togglecontent' => array($this, 'blockF5fa1fc0199d1ba7ef131e4adbbe4a6c'),
                'containerlabel' => array($this, 'block8d0b69f24471a9cbee6895eb2eaff32e'),
                'headertext' => array($this, 'block9e33f28fa302f9220118453003fad048'),
                'headeractions' => array($this, 'blockEe31d82f06881b7ed70f6a07696aa6c2'),
                'content' => array($this, 'blockC14866a799ebe795dfb05a67e35ee25c'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionE8eeced00120daeac9dea85a9bc45f20($context, $indent, $value);

        return $buffer;
    }

    private function section1d3440260a7cbba0e1322f28a1fe24f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglemailmenu, local_mail ';
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
                
                $buffer .= $indent . ' togglemailmenu, local_mail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC67aef31f3ec83c2943aaeafcf555d66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' icon, local_mail, {{#str}} togglemailmenu, local_mail {{/str}} ';
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
                
                $buffer .= ' icon, local_mail, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1d3440260a7cbba0e1322f28a1fe24f6($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f8966e939eb10a69f9ee867dc14d47a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="count-container">{{.}}</div>
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
                
                $buffer .= $indent . '        <div class="count-container">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb923338a21e4d0344e6d96496e47b4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' mailmenu, local_mail ';
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
                
                $buffer .= $indent . ' mailmenu, local_mail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc7842ed0fb7138f8c576e1fcbb475e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pluginname, local_mail ';
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
                
                $buffer .= ' pluginname, local_mail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8663a566575b8fa437b8549f3813388(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' compose, local_mail ';
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
                
                $buffer .= ' compose, local_mail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section754967f12819d7eb90a06a569987350c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' preferences, core ';
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
                
                $buffer .= ' preferences, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31e755d7ab3b0ae2890d52599fbe5106(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core, {{#str}} preferences, core {{/str}} ';
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
                
                $buffer .= ' i/settings, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section754967f12819d7eb90a06a569987350c($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb30325ba4e5065f061652102e745487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{.}}"';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0207588d22f8c09fdb967035a35bb9b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mail-navbar-menu-item-active';
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
                
                $buffer .= 'mail-navbar-menu-item-active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8baf066040de97ee7d38588810d569b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dimmed_text';
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
                
                $buffer .= 'dimmed_text';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f3d2d62fbfb7e5f64ce973f13750e01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="badge badge-important">{{.}}</span>';
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
                
                $buffer .= '<span class="badge badge-important">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAeb467a9cc70006ff24bc68fbec2ed40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="badge">{{.}}</span>';
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
                
                $buffer .= '<span class="badge">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04c2d70b1809bab57c7e4ab3423c1b4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{.}}, local_mail, ';
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
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', local_mail, ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section055882f854dbd88453eb0a54621fa8a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}} {{.}}, local_mail, {{/pix}}';
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
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section04c2d70b1809bab57c7e4ab3423c1b4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd29fb2ee48eee5b37e989af9fb8155d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{url}}}" {{#title}}title="{{.}}"{{/title}}
                class="mail-navbar-menu-item
                    {{#active}}mail-navbar-menu-item-active{{/active}}
                    {{#dimmed}}dimmed_text{{/dimmed}}">
                {{#unread}}<span class="badge badge-important">{{.}}</span>{{/unread}}
                {{#drafts}}<span class="badge">{{.}}</span>{{/drafts}}
                {{#icon}}{{#pix}} {{.}}, local_mail, {{/pix}}{{/icon}}
                {{#text}}{{.}}{{/text}}
            </a>
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                class="mail-navbar-menu-item
';
                $buffer .= $indent . '                    ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section0207588d22f8c09fdb967035a35bb9b2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                // 'dimmed' section
                $value = $context->find('dimmed');
                $buffer .= $this->sectionE8baf066040de97ee7d38588810d569b($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                // 'unread' section
                $value = $context->find('unread');
                $buffer .= $this->section9f3d2d62fbfb7e5f64ce973f13750e01($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'drafts' section
                $value = $context->find('drafts');
                $buffer .= $this->sectionAeb467a9cc70006ff24bc68fbec2ed40($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'icon' section
                $value = $context->find('icon');
                $buffer .= $this->section055882f854dbd88453eb0a54621fa8a0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'text' section
                $value = $context->find('text');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8eeced00120daeac9dea85a9bc45f20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core/popover_region_controller\'], function($, controller) {
    var container = $(\'#nav-mail-popover-container\');
    var controller = new controller(container);
    controller.registerListNavigationEventListeners();
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
                
                $buffer .= $indent . 'require([\'jquery\', \'core/popover_region_controller\'], function($, controller) {
';
                $buffer .= $indent . '    var container = $(\'#nav-mail-popover-container\');
';
                $buffer .= $indent . '    var controller = new controller(container);
';
                $buffer .= $indent . '    controller.registerListNavigationEventListeners();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockB1e43e9f92348ef3adc1b123f692e85a($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'popover-region-mail';
    
        return $buffer;
    }

    public function block482ca75dccfae1b08a5672a2d0d15643($context)
    {
        $indent = $buffer = '';
        $buffer .= '        id="nav-mail-popover-container"
';
    
        return $buffer;
    }

    public function block5d95ab626acc680a1ab0ba1aecd871b1($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1d3440260a7cbba0e1322f28a1fe24f6($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF5fa1fc0199d1ba7ef131e4adbbe4a6c($context)
    {
        $indent = $buffer = '';
        $buffer .= '        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionC67aef31f3ec83c2943aaeafcf555d66($context, $indent, $value);
        $buffer .= '
';
        // 'count' section
        $value = $context->find('count');
        $buffer .= $this->section6f8966e939eb10a69f9ee867dc14d47a($context, $indent, $value);
    
        return $buffer;
    }

    public function block8d0b69f24471a9cbee6895eb2eaff32e($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAb923338a21e4d0344e6d96496e47b4f($context, $indent, $value);
    
        return $buffer;
    }

    public function block9e33f28fa302f9220118453003fad048($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDc7842ed0fb7138f8c576e1fcbb475e6($context, $indent, $value);
    
        return $buffer;
    }

    public function blockEe31d82f06881b7ed70f6a07696aa6c2($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <a href="';
        $value = $this->resolveValue($context->find('composeurl'), $context);
        $buffer .= $value;
        $buffer .= '" class="mail-navbar-menu-compose-link">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA8663a566575b8fa437b8549f3813388($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->find('preferencesurl'), $context);
        $buffer .= $value;
        $buffer .= '" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section754967f12819d7eb90a06a569987350c($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section31e755d7ab3b0ae2890d52599fbe5106($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
    
        return $buffer;
    }

    public function blockC14866a799ebe795dfb05a67e35ee25c($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="mail-navbar-menu">
';
        // 'items' section
        $value = $context->find('items');
        $buffer .= $this->sectionBd29fb2ee48eee5b37e989af9fb8155d($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
