<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */


/**
 * DBに依存した処理を抽象化するファクトリークラス(拡張).
 *
 * SC_DB_DBFactory をカスタマイズする場合はこのクラスを編集する.
 *
 * @package DB
 * @author EC-CUBE CO.,LTD.
 * @version $Id$
 */
class SC_DB_DBFactory_Ex extends SC_DB_DBFactory
{
    /**
     * DB_TYPE に応じた DBFactory インスタンスを生成する.
     *
     * @param string $db_type 任意のインスタンスを返したい場合は DB_TYPE 文字列を指定
     * @return mixed DBFactory インスタンス
     */
    public static function getInstance($db_type = DB_TYPE)
    {
        switch ($db_type) {
            case 'mysql':
            case 'mysqli':
                return new SC_DB_DBFactory_MYSQL_Ex();

            case 'pgsql':
                return new SC_DB_DBFactory_PGSQL_Ex();

            default:
                return new SC_DB_DBFactory_Ex();
        }
    }
}
