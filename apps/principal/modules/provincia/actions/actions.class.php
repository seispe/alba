<?php
 
/**
 *    This file is part of Alba.
 * 
 *    Alba is free software; you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation; either version 2 of the License, or
 *    (at your option) any later version.
 *
 *    Alba is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with Alba; if not, write to the Free Software
 *    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


/**
 * Provincia Acciones
 *
 * @package    alba
 * @author     José Luis Di Biase <josx@interorganic.com.ar>
 * @author     Héctor Sanchez <hsanchez@pressenter.com.ar>
 * @author     Fernando Toledo <ftoledo@pressenter.com.ar>
 * @version    SVN: $Id$
 * @filesource
 * @license GPL
 */

class provinciaActions extends autoprovinciaActions {
    protected function addSortCriteria ($c) {                                                                                                                          
        if ($sort_column = $this->getUser()->getAttribute('sort', 'nombre_corto', 'sf_admin/provincia/sort')) {                                                                                                                        
            $sort_column = Propel::getDB($c->getDbName())->quoteIdentifier($sort_column);                                          
            if ($this->getUser()->getAttribute('type', 'asc', 'sf_admin/provincia/sort') == 'asc') {                                                                                                                      
                $c->addAscendingOrderByColumn($sort_column);                                                                         
            }                                                                                                                      
            else {                                                                                                                      
                $c->addDescendingOrderByColumn($sort_column);                                                                        
            }                                                                                                                      
        }                                                                                                                        
    }                                                                                                                          
}

?>
