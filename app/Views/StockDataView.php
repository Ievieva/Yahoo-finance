<html>
<head>
    <style>
        span {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>
<a href="/">Back</a>
<h1>Stock <?php echo $id; ?></h1>
<ul>
    <li>
        <span>Previous Close </span>
        <span><?php echo number_format($stock->regularMarketPreviousClose(), 2); ?></span>
    </li>
    <li>
        <span>Open </span>
        <span><?php echo number_format($stock->regularMarketOpen(), 2); ?></span>
    </li>
    <li>
        <span>Bid </span>
        <span><?php echo number_format($stock->bid(), 2) . ' x ' . $stock->bidSize() * 100; ?></span>
    </li>
    <li>
        <span>Ask </span>
        <span><?php echo number_format($stock->ask(), 2) . ' x ' . $stock->askSize() * 100; ?></span>
    </li>
    <li>
        <span>Day's Range </span>
        <span><?php echo number_format($stock->regularMarketDayLow(), 2);
            echo ' - ' . number_format($stock->regularMarketDayHigh(), 2); ?></span>
    </li>
    <li>
        <span>52 Week Range </span>
        <span><?php echo number_format($stock->fiftyTwoWeekLow(), 2);
        echo ' - ' . number_format($stock->fiftyTwoWeekHigh(), 2); ?></span>
    </li>
    <li>
        <span>Volume </span>
        <span><?php echo number_format($stock->regularMarketVolume()); ?></span>
    </li>
</ul>
</html>