<html>
    <h1>Stock <?php echo $id; ?></h1>
<ul>
    <li>Previous Close <?php echo $stock->regularMarketPreviousClose();?></li>
    <li>Open <?php echo $stock->regularMarketOpen();?></li>
    <li>Bid <?php echo $stock->bid() . 'x' . $stock->bidSize();?></li>
    <li>Ask <?php echo $stock->ask() . 'x' . $stock->askSize();?></li>
    <li>Day's Range <?php echo $stock->regularMarketDayLow() . '-' . $stock->regularMarketDayHigh();?></li>
    <li>52 Week Range <?php echo $stock->fiftyTwoWeekLow() . '-' . $stock->fiftyTwoWeekHigh();?></li>
    <li>Volume <?php echo $stock->regularMarketVolume();?></li>
</ul>
</html>