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

/* principal/index.html.twig */
class __TwigTemplate_5d3242bc93cabc351f324ec870dac868739617fccbc8b1751bf7af4e9f1155fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "principal/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Principal index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<body class=\"text-center\">
    <h1>Blog App</h1>
    <div>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["principals"]) || array_key_exists("principals", $context) ? $context["principals"] : (function () { throw new RuntimeError('Variable "principals" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["principal"]) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["principal"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['principal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
  <div class=\"container\">
  <header class=\"blog-header py-3\">
    <div class=\"row flex-nowrap justify-content-between align-items-center\">
      <div class=\"col-4 pt-1\">
        <a class=\"link-secondary\" href=\"#\">Subscribe</a>
      </div>
      <div class=\"col-4 text-center\">
        <a class=\"blog-header-logo text-dark\" href=\"#\">Large</a>
      </div>
      <div class=\"col-4 d-flex justify-content-end align-items-center\">
        <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
        </a>
        <a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Sign up</a>
      </div>
    </div>
  </header>

  <div class=\"nav-scroller py-1 mb-2\">
    <nav class=\"nav d-flex justify-content-between\">
      <a class=\"p-2 link-secondary\" href=\"#\">World</a>
      <a class=\"p-2 link-secondary\" href=\"#\">U.S.</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Technology</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Design</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Culture</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Business</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Politics</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Opinion</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Science</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Health</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Style</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Travel</a>
    </nav>
  </div>
</div>  
    
<main class=\"container\">
  <div class=\"p-4 p-md-5 mb-4 text-white rounded bg-dark\">
    <div class=\"col-md-6 px-0\">
      <h1 class=\"display-4 fst-italic\">Title of a longer featured blog post</h1>
      <p class=\"lead my-3\">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class=\"lead mb-0\"><a href=\"#\" class=\"text-white fw-bold\">Continue reading...</a></p>
    </div>
  </div>

  <div class=\"row mb-2\">
    <div class=\"col-md-6\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
        <div class=\"col p-4 d-flex flex-column position-static\">
          <strong class=\"d-inline-block mb-2 text-primary\">World</strong>
          <h3 class=\"mb-0\">Featured post</h3>
          <div class=\"mb-1 text-muted\">Nov 12</div>
          <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href=\"#\" class=\"stretched-link\">Continue reading</a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
          <svg class=\"bd-placeholder-img\" width=\"200\" height=\"250\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
        <div class=\"col p-4 d-flex flex-column position-static\">
          <strong class=\"d-inline-block mb-2 text-success\">Design</strong>
          <h3 class=\"mb-0\">Post title</h3>
          <div class=\"mb-1 text-muted\">Nov 11</div>
          <p class=\"mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href=\"#\" class=\"stretched-link\">Continue reading</a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
          <svg class=\"bd-placeholder-img\" width=\"200\" height=\"250\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>

  <div class=\"row g-5\">
    <div class=\"col-md-8\">
      <h3 class=\"pb-4 mb-4 fst-italic border-bottom\">
        From the Firehose
      </h3>

      <article class=\"blog-post\">
        <h2 class=\"blog-post-title\">Sample blog post</h2>
        <p class=\"blog-post-meta\">January 1, 2021 by <a href=\"#\">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
        <hr>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h2>Blockquotes</h2>
        <p>This is an example blockquote in action:</p>
        <blockquote class=\"blockquote\">
          <p>Quoted text goes here.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example lists</h3>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>And this is an ordered list:</p>
        <ol>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ol>
        <p>And this is a definition list:</p>
        <dl>
          <dt>HyperText Markup Language (HTML)</dt>
          <dd>The language used to describe and define the content of a Web page</dd>
          <dt>Cascading Style Sheets (CSS)</dt>
          <dd>Used to describe the appearance of Web content</dd>
          <dt>JavaScript (JS)</dt>
          <dd>The programming language used to build advanced Web sites and applications</dd>
        </dl>
        <h2>Inline HTML elements</h2>
        <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element\">Mozilla Developer Network</a>.</p>
        <ul>
          <li><strong>To bold text</strong>, use <code class=\"language-plaintext highlighter-rouge\">&lt;strong&gt;</code>.</li>
          <li><em>To italicize text</em>, use <code class=\"language-plaintext highlighter-rouge\">&lt;em&gt;</code>.</li>
          <li>Abbreviations, like <abbr title=\"HyperText Markup Langage\">HTML</abbr> should use <code class=\"language-plaintext highlighter-rouge\">&lt;abbr&gt;</code>, with an optional <code class=\"language-plaintext highlighter-rouge\">title</code> attribute for the full phrase.</li>
          <li>Citations, like <cite>— Mark Otto</cite>, should use <code class=\"language-plaintext highlighter-rouge\">&lt;cite&gt;</code>.</li>
          <li><del>Deleted</del> text should use <code class=\"language-plaintext highlighter-rouge\">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class=\"language-plaintext highlighter-rouge\">&lt;ins&gt;</code>.</li>
          <li>Superscript <sup>text</sup> uses <code class=\"language-plaintext highlighter-rouge\">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class=\"language-plaintext highlighter-rouge\">&lt;sub&gt;</code>.</li>
        </ul>
        <p>Most of these elements are styled by browsers with few modifications on our part.</p>
        <h2>Heading</h2>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Sub-heading</h3>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <pre><code>Example code block</code></pre>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <article class=\"blog-post\">
        <h2 class=\"blog-post-title\">Another blog post</h2>
        <p class=\"blog-post-meta\">December 23, 2020 by <a href=\"#\">Jacob</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <blockquote>
          <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example table</h3>
        <p>And don't forget about tables in these posts:</p>
        <table class=\"table\">
          <thead>
            <tr>
              <th>Name</th>
              <th>Upvotes</th>
              <th>Downvotes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alice</td>
              <td>10</td>
              <td>11</td>
            </tr>
            <tr>
              <td>Bob</td>
              <td>4</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Charlie</td>
              <td>7</td>
              <td>9</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Totals</td>
              <td>21</td>
              <td>23</td>
            </tr>
          </tfoot>
        </table>

        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <article class=\"blog-post\">
        <h2 class=\"blog-post-title\">New feature</h2>
        <p class=\"blog-post-meta\">December 14, 2020 by <a href=\"#\">Chris</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <nav class=\"blog-pagination\" aria-label=\"Pagination\">
        <a class=\"btn btn-outline-primary\" href=\"#\">Older</a>
        <a class=\"btn btn-outline-secondary disabled\">Newer</a>
      </nav>

    </div>

    <div class=\"col-md-4\">
      <div class=\"position-sticky\" style=\"top: 2rem;\">
        <div class=\"p-4 mb-3 bg-light rounded\">
          <h4 class=\"fst-italic\">About</h4>
          <p class=\"mb-0\">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class=\"p-4\">
          <h4 class=\"fst-italic\">Archives</h4>
          <ol class=\"list-unstyled mb-0\">
            <li><a href=\"#\">March 2021</a></li>
            <li><a href=\"#\">February 2021</a></li>
            <li><a href=\"#\">January 2021</a></li>
            <li><a href=\"#\">December 2020</a></li>
            <li><a href=\"#\">November 2020</a></li>
            <li><a href=\"#\">October 2020</a></li>
            <li><a href=\"#\">September 2020</a></li>
            <li><a href=\"#\">August 2020</a></li>
            <li><a href=\"#\">July 2020</a></li>
            <li><a href=\"#\">June 2020</a></li>
            <li><a href=\"#\">May 2020</a></li>
            <li><a href=\"#\">April 2020</a></li>
          </ol>
        </div>

        <div class=\"p-4\">
          <h4 class=\"fst-italic\">Elsewhere</h4>
          <ol class=\"list-unstyled\">
            <li><a href=\"#\">GitHub</a></li>
            <li><a href=\"#\">Twitter</a></li>
            <li><a href=\"#\">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

    <footer class=\"blog-footer\">
  <p>Blog template built for <a href=\"https://getbootstrap.com/\">Bootstrap</a> by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
  <p>
    <a href=\"#\">Back to top</a>
  </p>
</footer>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "principal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 13,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Principal index{% endblock %}

{% block body %}

<body class=\"text-center\">
    <h1>Blog App</h1>
    <div>
    {% for principal in principals %}
        {{ principal.id }}
    {% endfor %}
    </div>
  <div class=\"container\">
  <header class=\"blog-header py-3\">
    <div class=\"row flex-nowrap justify-content-between align-items-center\">
      <div class=\"col-4 pt-1\">
        <a class=\"link-secondary\" href=\"#\">Subscribe</a>
      </div>
      <div class=\"col-4 text-center\">
        <a class=\"blog-header-logo text-dark\" href=\"#\">Large</a>
      </div>
      <div class=\"col-4 d-flex justify-content-end align-items-center\">
        <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
        </a>
        <a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Sign up</a>
      </div>
    </div>
  </header>

  <div class=\"nav-scroller py-1 mb-2\">
    <nav class=\"nav d-flex justify-content-between\">
      <a class=\"p-2 link-secondary\" href=\"#\">World</a>
      <a class=\"p-2 link-secondary\" href=\"#\">U.S.</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Technology</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Design</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Culture</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Business</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Politics</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Opinion</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Science</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Health</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Style</a>
      <a class=\"p-2 link-secondary\" href=\"#\">Travel</a>
    </nav>
  </div>
</div>  
    
<main class=\"container\">
  <div class=\"p-4 p-md-5 mb-4 text-white rounded bg-dark\">
    <div class=\"col-md-6 px-0\">
      <h1 class=\"display-4 fst-italic\">Title of a longer featured blog post</h1>
      <p class=\"lead my-3\">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class=\"lead mb-0\"><a href=\"#\" class=\"text-white fw-bold\">Continue reading...</a></p>
    </div>
  </div>

  <div class=\"row mb-2\">
    <div class=\"col-md-6\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
        <div class=\"col p-4 d-flex flex-column position-static\">
          <strong class=\"d-inline-block mb-2 text-primary\">World</strong>
          <h3 class=\"mb-0\">Featured post</h3>
          <div class=\"mb-1 text-muted\">Nov 12</div>
          <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href=\"#\" class=\"stretched-link\">Continue reading</a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
          <svg class=\"bd-placeholder-img\" width=\"200\" height=\"250\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
        <div class=\"col p-4 d-flex flex-column position-static\">
          <strong class=\"d-inline-block mb-2 text-success\">Design</strong>
          <h3 class=\"mb-0\">Post title</h3>
          <div class=\"mb-1 text-muted\">Nov 11</div>
          <p class=\"mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href=\"#\" class=\"stretched-link\">Continue reading</a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
          <svg class=\"bd-placeholder-img\" width=\"200\" height=\"250\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>

  <div class=\"row g-5\">
    <div class=\"col-md-8\">
      <h3 class=\"pb-4 mb-4 fst-italic border-bottom\">
        From the Firehose
      </h3>

      <article class=\"blog-post\">
        <h2 class=\"blog-post-title\">Sample blog post</h2>
        <p class=\"blog-post-meta\">January 1, 2021 by <a href=\"#\">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
        <hr>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h2>Blockquotes</h2>
        <p>This is an example blockquote in action:</p>
        <blockquote class=\"blockquote\">
          <p>Quoted text goes here.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example lists</h3>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>And this is an ordered list:</p>
        <ol>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ol>
        <p>And this is a definition list:</p>
        <dl>
          <dt>HyperText Markup Language (HTML)</dt>
          <dd>The language used to describe and define the content of a Web page</dd>
          <dt>Cascading Style Sheets (CSS)</dt>
          <dd>Used to describe the appearance of Web content</dd>
          <dt>JavaScript (JS)</dt>
          <dd>The programming language used to build advanced Web sites and applications</dd>
        </dl>
        <h2>Inline HTML elements</h2>
        <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a href=\"https://developer.mozilla.org/en-US/docs/Web/HTML/Element\">Mozilla Developer Network</a>.</p>
        <ul>
          <li><strong>To bold text</strong>, use <code class=\"language-plaintext highlighter-rouge\">&lt;strong&gt;</code>.</li>
          <li><em>To italicize text</em>, use <code class=\"language-plaintext highlighter-rouge\">&lt;em&gt;</code>.</li>
          <li>Abbreviations, like <abbr title=\"HyperText Markup Langage\">HTML</abbr> should use <code class=\"language-plaintext highlighter-rouge\">&lt;abbr&gt;</code>, with an optional <code class=\"language-plaintext highlighter-rouge\">title</code> attribute for the full phrase.</li>
          <li>Citations, like <cite>— Mark Otto</cite>, should use <code class=\"language-plaintext highlighter-rouge\">&lt;cite&gt;</code>.</li>
          <li><del>Deleted</del> text should use <code class=\"language-plaintext highlighter-rouge\">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class=\"language-plaintext highlighter-rouge\">&lt;ins&gt;</code>.</li>
          <li>Superscript <sup>text</sup> uses <code class=\"language-plaintext highlighter-rouge\">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class=\"language-plaintext highlighter-rouge\">&lt;sub&gt;</code>.</li>
        </ul>
        <p>Most of these elements are styled by browsers with few modifications on our part.</p>
        <h2>Heading</h2>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Sub-heading</h3>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <pre><code>Example code block</code></pre>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <article class=\"blog-post\">
        <h2 class=\"blog-post-title\">Another blog post</h2>
        <p class=\"blog-post-meta\">December 23, 2020 by <a href=\"#\">Jacob</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <blockquote>
          <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example table</h3>
        <p>And don't forget about tables in these posts:</p>
        <table class=\"table\">
          <thead>
            <tr>
              <th>Name</th>
              <th>Upvotes</th>
              <th>Downvotes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alice</td>
              <td>10</td>
              <td>11</td>
            </tr>
            <tr>
              <td>Bob</td>
              <td>4</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Charlie</td>
              <td>7</td>
              <td>9</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Totals</td>
              <td>21</td>
              <td>23</td>
            </tr>
          </tfoot>
        </table>

        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <article class=\"blog-post\">
        <h2 class=\"blog-post-title\">New feature</h2>
        <p class=\"blog-post-meta\">December 14, 2020 by <a href=\"#\">Chris</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

      <nav class=\"blog-pagination\" aria-label=\"Pagination\">
        <a class=\"btn btn-outline-primary\" href=\"#\">Older</a>
        <a class=\"btn btn-outline-secondary disabled\">Newer</a>
      </nav>

    </div>

    <div class=\"col-md-4\">
      <div class=\"position-sticky\" style=\"top: 2rem;\">
        <div class=\"p-4 mb-3 bg-light rounded\">
          <h4 class=\"fst-italic\">About</h4>
          <p class=\"mb-0\">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class=\"p-4\">
          <h4 class=\"fst-italic\">Archives</h4>
          <ol class=\"list-unstyled mb-0\">
            <li><a href=\"#\">March 2021</a></li>
            <li><a href=\"#\">February 2021</a></li>
            <li><a href=\"#\">January 2021</a></li>
            <li><a href=\"#\">December 2020</a></li>
            <li><a href=\"#\">November 2020</a></li>
            <li><a href=\"#\">October 2020</a></li>
            <li><a href=\"#\">September 2020</a></li>
            <li><a href=\"#\">August 2020</a></li>
            <li><a href=\"#\">July 2020</a></li>
            <li><a href=\"#\">June 2020</a></li>
            <li><a href=\"#\">May 2020</a></li>
            <li><a href=\"#\">April 2020</a></li>
          </ol>
        </div>

        <div class=\"p-4\">
          <h4 class=\"fst-italic\">Elsewhere</h4>
          <ol class=\"list-unstyled\">
            <li><a href=\"#\">GitHub</a></li>
            <li><a href=\"#\">Twitter</a></li>
            <li><a href=\"#\">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

    <footer class=\"blog-footer\">
  <p>Blog template built for <a href=\"https://getbootstrap.com/\">Bootstrap</a> by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
  <p>
    <a href=\"#\">Back to top</a>
  </p>
</footer>
    </body>
{% endblock %}
", "principal/index.html.twig", "/home/cabox/workspace/my_blog_sexy/blog/templates/principal/index.html.twig");
    }
}
