<?php

class __Mustache_d6e9b98c64b884df48671b20ac420bb3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="message-index-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="row message_container --rm--message-app --rm--main --rm--bg-light --rm--border --rm--flex-row" aria-expanded="false" aria-hidden="true" data-region="message-index" role="region">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 pr0 pl0">
';
        $buffer .= $indent . '    <div class="inbox_user_list">
';
        $buffer .= $indent . '      <div class="panel-header-container" data-region="panel-header-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_search_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="ui_kit_button pt10 pb25">
';
        $buffer .= $indent . '      <button data-route="view-settings" data-route-param="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6584ba6b6168cbf2f66e5fde26dfdaad($context, $indent, $value);
        $buffer .= '" role="button" class="btn btn-md btn-thm pull-right">
';
        $buffer .= $indent . '        <i class="fa fa-cog" aria-hidden="true"></i>
';
        $buffer .= $indent . '      </button>
';
        $buffer .= $indent . '      <button data-route="view-contacts" role="button" class="btn btn-md btn-thm pull-right">
';
        $buffer .= $indent . '        <i class="fa fa-user" aria-hidden="true"></i>
';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAe27671d8d1750e9af3adcc5df1cbf0d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span class="badge bg-primary ml-2 ';
        // 'contactrequestcount' inverted section
        $value = $context->find('contactrequestcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '" data-region="contact-request-count" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section805e650638aa325ee8db2b322ff4bb8f($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->find('contactrequestcount'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '      </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '      <div class="panel-body-container" data-region="panel-body-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_search_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div class="col-sm-12 col-md-6 col-lg-7 col-xl-8 pr0 pl0">
';
        $buffer .= $indent . '    <div class="user_heading">
';
        $buffer .= $indent . '      <div class="wrap" data-region="header-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contacts_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_settings_header')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="--rm--header-container --rm--position-relative">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="inbox_chatting_box">
';
        $buffer .= $indent . '      <div class="body-container position-relative" data-region="body-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contact_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_contacts_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_group_info_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_settings_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="message_input">
';
        $buffer .= $indent . '      <div class="footer-container" data-region="footer-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section578ec1b6bbc189ba8533542a14fbf958($context, $indent, $value);

        return $buffer;
    }

    private function section6584ba6b6168cbf2f66e5fde26dfdaad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings, core_message ';
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
                
                $buffer .= ' settings, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe27671d8d1750e9af3adcc5df1cbf0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contacts, core_message ';
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
                
                $buffer .= ' contacts, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section805e650638aa325ee8db2b322ff4bb8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pendingcontactrequests, core_message, {{contactrequestcount}} ';
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
                
                $buffer .= ' pendingcontactrequests, core_message, ';
                $value = $this->resolveValue($context->find('contactrequestcount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section578ec1b6bbc189ba8533542a14fbf958(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  require([\'jquery\', \'core_message/message_drawer\'], function($, MessageDrawer) {
  var root = $(\'#message-index-{{uniqid}}\');
  MessageDrawer.init(root, \'{{uniqid}}\', true, {{{route}}});
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
                
                $buffer .= $indent . '  require([\'jquery\', \'core_message/message_drawer\'], function($, MessageDrawer) {
';
                $buffer .= $indent . '  var root = $(\'#message-index-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '  MessageDrawer.init(root, \'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', true, ';
                $value = $this->resolveValue($context->find('route'), $context);
                $buffer .= $value;
                $buffer .= ');
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
