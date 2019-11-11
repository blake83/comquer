<?php declare(strict_types=1);

namespace Comquer\Query;

final class QueryBus
{
    private $handlerProvider;

    public function __construct(QueryHandlerProvider $handlerProvider)
    {
        $this->handlerProvider = $handlerProvider;
    }

    public function __invoke(Query $query)
    {
        $commandHandler = ($this->handlerProvider)($query);
        $commandHandler($query);
    }
}