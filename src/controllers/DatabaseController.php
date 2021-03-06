<?php
/**
 * @author Nicolas CARPi <nico-git@deltablot.email>
 * @copyright 2012 Nicolas CARPi
 * @see https://www.elabftw.net Official website
 * @license AGPL-3.0
 * @package elabftw
 */
declare(strict_types=1);

namespace Elabftw\Controllers;

use Elabftw\Elabftw\App;
use Elabftw\Models\Database;
use Elabftw\Models\ItemsTypes;

/**
 * For database.php
 */
class DatabaseController extends AbstractEntityController
{
    /**
     * Constructor
     *
     * @param App $app
     * @param Database $entity
     */
    public function __construct(App $app, Database $entity)
    {
        parent::__construct($app, $entity);

        $Category = new ItemsTypes($this->App->Users);
        $this->categoryArr = $Category->readAll();
    }

    /**
     * Get the results from main sql query with items to display
     *
     * @param string $searchType
     * @return array
     */
    protected function getItemsArr(string $searchType): array
    {
        return $this->Entity->readShow();
    }
}
