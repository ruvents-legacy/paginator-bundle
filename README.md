# RUVENTS Paginator Bundle

Bundle to use [RUVENTS Paginator](https://github.com/ruvents/paginator) with Symfony.

Replaces the `Ruvents\Paginator\Exception\PageOutOfRangeException` with a `Symfony\Component\HttpKernel\Exception\NotFoundHttpException`.

Registers a twig path alias for the library twig templates.

```twig
{% embed '@RuventsPaginator/bootstrap_4.html.twig' with {paginator: paginator} %}
{% endembed %}
```
