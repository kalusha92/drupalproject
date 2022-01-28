<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/livechat/templates/livechat-settings.html.twig */
class __TwigTemplate_7566e996e1822388bf821d6d794c3365440ee36d88291d1a0c7d9042d911c669 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"login_panel\" style=\"display:flex; align-items: center;\">
  <div style=\"display: flex; flex-direction: column; align-items: center; margin-bottom: 40px;\">
    <div style=\"display: flex; flex-direction: row; align-items: center;\">
      <div class=\"livechat_logo2\"></div>
    </div>
    <div id=\"login_form\">
      <div class=\"progress-button hidden\">
        Saving...
      </div>
      <div>
        <iframe id=\"login-with-livechat\" src=\"https://addons.livechatinc.com/sign-in-with-livechat\"> </iframe>
      </div>
    </div>
    <div class=\"or-delimiter\">or</div>
    <div id=\"livechat_link\" style=\"font-size: 15px; margin-top:4px;\">
      <a href=\"https://my.livechatinc.com/signup?utm_source=drupal.org&utm_medium=integration&utm_campaign=drupal8integration\" target=\"_blank\">create an account</a>
    </div>
  </div>
  <div style=\"text-align: center; width: 600px; height: 400px;\">
    <div class=\"livechat_screenshot\"></div>
    <p style=\"font-size:16px;\">Check out our apps for <a href=\"https://www.livechatinc.com/applications/?utm_source=drupal.org&utm_medium=integration&utm_campaign=drupal8integration\" target=\"_blank\">desktop or mobile!</a></p>
  </div>
</div>
<div id=\"admin_panel\" style=\"display:none;\">
  <div class=\"region region-highlighted notification\" style=\"visibility: hidden;\">
    <div role=\"contentinfo\" aria-label=\"Status message\" class=\"messages messages--status\">
          <h2 class=\"visually-hidden\">Status message</h2>
          Settings have been saved!
    </div>
  </div>
  <div id=\"livechat_panel\" style=\"display: flex; justify-content: space-around; align-items: center;\">

    <div style=\"margin-top: 50px; max-width: 560px;\">

      <h3>Your LiveChat is now ready!</h3>

      <div style=\"margin-bottom: -4px;\">You are now rocking chat window from your <span id=\"livechat_login\" style=\"font-weight: bold;\"></span> account.</div>

      <div id=\"advanced_settings\" class=\"details-wrapper\">
        <div class=\"details-description\"></div>
        <div class=\"js-form-item form-item js-form-type-select form-type-select\">
          <label style=\"display: inline-block; vertical-align: 9%;\" for=\"livechat_mobile\">Hide chat window on mobile <span data-tooltip=\"Hide chat window for visitors browsing your store from mobile.\" data-tooltip-position=\"top\"><div class=\"question_mark\"></div></span></label>
          <select id=\"livechat_mobile\" class=\"advanced_options\" name=\"livechat_mobile\" style=\"margin-left: 13px; width: 60px;\">
            <option value=\"Yes\">Yes</option>
            <option value=\"No\" selected>No</option>
          </select>
        </div>
      </div>
    ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hide_live_chat_settings_form"] ?? null), 49, $this->source), "html", null, true);
        echo "
      <p>Need help? Check out our <a href=\"https://www.livechatinc.com/kb/drupal-add-livechat-website/?utm_source=drupal.org&utm_medium=integration&utm_campaign=drupal8integration\" target=\"_blank\">LiveChat for Drupal 8 integration tutorial</a>.</p>
      <p class=\"reset-settings\">Something went wrong? <a class=\"reset-settings\" href=\"#\" id=\"reset_settings\">Click here</a> to reset settings!</p>
    </div>
    <div style=\"text-align: center; width: 100%; height: 400px; max-width: 560px;\">
      <div class=\"livechat_screenshot\"></div>

      <p>Use our <a href=\"https://my.livechatinc.com?utm_source=drupal.org&utm_medium=integration&utm_campaign=drupal8integration\" target=\"_blank\">web application</a> or download <a href=\"https://www.livechatinc.com/applications/?utm_source=drupal.org&utm_medium=integration&utm_campaign=drupal8integration\" target=\"_blank\">the app</a> for desktop or mobile!</p>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/livechat/templates/livechat-settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 49,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/livechat/templates/livechat-settings.html.twig", "C:\\xampp\\htdocs\\drupalproject\\modules\\livechat\\templates\\livechat-settings.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
