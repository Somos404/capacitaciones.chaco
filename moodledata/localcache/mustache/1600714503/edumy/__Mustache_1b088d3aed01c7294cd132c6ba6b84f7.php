<?php

class __Mustache_1b088d3aed01c7294cd132c6ba6b84f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'isloggedin' section
        $value = $context->find('isloggedin');
        $buffer .= $this->section5cf84949ba54d40c1ef937ce82e363ed($context, $indent, $value);

        return $buffer;
    }

    private function section37e64c24d6f51fec196600bf2a326075(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' navigation, theme_edumy ';
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
                
                $buffer .= ' navigation, theme_edumy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5cf84949ba54d40c1ef937ce82e363ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <ul class="header_user_notif ccn-frontend-header_user_notif pull-right dn-smd">
    <li class="user_setting ccn-settings-nav ccn-settings-nav-darkMode">
      <div class="dropdown">
        <a class="notification_icon" id="ccnToggleDarkMode"><span class="ccn-flaticon-hide"></span></a>
      </div>
    </li>
    {{{ output.navbar_plugin_output }}}
    <li class="user_setting ccn-settings-nav">
      <div class="dropdown">
        <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-settings"></span></a>
        <div class="dropdown-menu notification_dropdown_content">
          <div class="so_heading">
            <p>{{#str}} navigation, theme_edumy {{/str}}</p>
          </div>
          <div class="user_setting_content">
            <div class="so_content" data-simplebar="init">
              {{> theme_boost/flat_navigation }}
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="user_setting">
      <div class="dropdown">
        <a class="btn dropdown-toggle ccn-profile-menu" href="#" data-toggle="dropdown" aria-expanded="false"><img class="rounded-circle" src="{{{ user_profile_picture }}}" alt="{{{ user_username }}}"></a>
        <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(-9px, -5px, 0px); top: 0px; left: 0px; will-change: transform;">
          <div class="user_set_header">
            <img class="float-left rounded-circle" src="{{{ user_profile_picture }}}" alt="{{{ user_username }}}">
            <p>{{{ user_username }}} <br><span class="address">{{{ user_email }}}</span></p>
          </div>
          <div class="user_setting_content">
            {{{ output.user_menu }}}
          </div>
        </div>
      </div>
    </li>
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
                
                $buffer .= $indent . '  <ul class="header_user_notif ccn-frontend-header_user_notif pull-right dn-smd">
';
                $buffer .= $indent . '    <li class="user_setting ccn-settings-nav ccn-settings-nav-darkMode">
';
                $buffer .= $indent . '      <div class="dropdown">
';
                $buffer .= $indent . '        <a class="notification_icon" id="ccnToggleDarkMode"><span class="ccn-flaticon-hide"></span></a>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </li>
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    <li class="user_setting ccn-settings-nav">
';
                $buffer .= $indent . '      <div class="dropdown">
';
                $buffer .= $indent . '        <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-settings"></span></a>
';
                $buffer .= $indent . '        <div class="dropdown-menu notification_dropdown_content">
';
                $buffer .= $indent . '          <div class="so_heading">
';
                $buffer .= $indent . '            <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section37e64c24d6f51fec196600bf2a326075($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '          <div class="user_setting_content">
';
                $buffer .= $indent . '            <div class="so_content" data-simplebar="init">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/flat_navigation')) {
                    $buffer .= $partial->renderInternal($context, $indent . '              ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </li>
';
                $buffer .= $indent . '    <li class="user_setting">
';
                $buffer .= $indent . '      <div class="dropdown">
';
                $buffer .= $indent . '        <a class="btn dropdown-toggle ccn-profile-menu" href="#" data-toggle="dropdown" aria-expanded="false"><img class="rounded-circle" src="';
                $value = $this->resolveValue($context->find('user_profile_picture'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('user_username'), $context);
                $buffer .= $value;
                $buffer .= '"></a>
';
                $buffer .= $indent . '        <div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(-9px, -5px, 0px); top: 0px; left: 0px; will-change: transform;">
';
                $buffer .= $indent . '          <div class="user_set_header">
';
                $buffer .= $indent . '            <img class="float-left rounded-circle" src="';
                $value = $this->resolveValue($context->find('user_profile_picture'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('user_username'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('user_username'), $context);
                $buffer .= $value;
                $buffer .= ' <br><span class="address">';
                $value = $this->resolveValue($context->find('user_email'), $context);
                $buffer .= $value;
                $buffer .= '</span></p>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '          <div class="user_setting_content">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </li>
';
                $buffer .= $indent . '  </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
