<?php

namespace workbench\webb\Storage;

interface TransactionHandlerInterface
{
    /**
     * @return bool True if changes where persisted, false otherwise
     */
    public function commit(): bool;

    /**
     * @return bool True if changes where discarded, false otherwise
     */
    public function rollback(): bool;
}
