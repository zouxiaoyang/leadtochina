<?php
    defined('_JEXEC') or die('Restricted access');
    class HTML_reviews{
        function editReview($row,$lists,$option){
            $editor = &JFactory::getEditor();
            JHTML::_('behavior.calendar');
?>
    <form action="index.php" method="post" name="adminForm" id="adminForm">
        <fieldset class="adminform">
            <legend>Details</legend>
            <table>
                <tr>
                    <td width="100" align="right" class="key">Name:</td>
                    <td><input class="textarea" type="text" name="name" id="name" size="50" maxlength="250" value="<?php echo $row->name;?>"/></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Address:</td>
                    <td><input class="textarea" type="text" name="address" id="address" size="50" maxlength="250" value="<?php echo $row->address;?>"/></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Reservations:</td>
                    <td><?php echo $lists['reservations'];?></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Quicktake:</td>
                    <td><?php echo $editor->display('quicktake',$row->quicktake,'100%','150','40','5');?></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Review:</td>
                    <td><?php echo $editor->display('review',$row->review,'100%','250','40','10');?></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Notes:</td>
                    <td>
                        <textarea class="textarea" cols="20" rows="4" name="notes" style="width:500px">
                            <?php echo $row->notes;?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Smoking:</td>
                    <td><?php echo $lists['smoking'];?></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Credit Cards:</td>
                    <td><input class="textarea" type="text" name="credit_cards" id="credit_cards" size="50" maxlength="250" value="<?php echo $row->credit_cards;?>"/></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Cuisine:</td>
                    <td><input class="textarea" type="text" name="cuisine" id="cuisine" size="31" maxlength="31" value="<?php echo $row->cuisine;?>"/></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Average Dinner Price:</td>
                    <td><input class="textarea" type="text" name="avg_dinner_price" id="avg_dinner_price" size="5" maxlength="3" value="<?php echo $row->avg_dinner_price;?>"/></td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Review Date:</td>
                    <td>
                        <input class="textarea" type="text" name="review_date" id="review_date" size="25" maxlength="19" value="<?php echo $row->review_date;?>"/>
                        <input type="reset" class="button" value="..." onclick="return showCalendar('review_date','y-mm-dd');"/>
                    </td>
                </tr>
                <tr>
                    <td width="100" align="right" class="key">Published:</td>
                    <td><?php echo $lists['published'];?></td>
                </tr>
            </table>
        </fieldset>
        <input type="hidden" name="id" value="<?php echo $row->id;?>"/>
        <input type="hidden" name="option" value="<?php echo $option;?>"/>
        <input type="hidden" name="task" value=""/>
    </form>
<?php
        }
    }
?>