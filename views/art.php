<?php if (isset($_REQUEST['art'])): ?>

<a class="mw-ui-btn" href="<?php print content_link(); ?>?sell_art=<?php print $_REQUEST['art'] ?>">Sell this item</a>
<?php endif ?>
<div class="mw-wrapper" style="padding: 40px 0px;">
  <div data-mw="main">
    <div class="mw-ui-row shop-product-row">
      <div class="mw-ui-col" style="width:45%">
        <div class="mw-ui-col-container">
          <?php if (isset($images)): ?>
         
            <?php if (!empty($images)): ?>
             <div class="item-box" id="product-page-gallery">
            <?php foreach ($images as $item): ?>
            <img src="<?php print $item ?>" />
            <?php endforeach; ?>
             </div>
            <?php endif ?>
         
          <?php endif ?>
          <?php if (isset($sellers) and !empty($sellers)): ?>
          <h2>Buy this item</h2>
          <table border="0">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Seller</th>
                <th scope="col">Price</th>
                <th scope="col">Buy</th>
              </tr>
            </thead>
            <?php foreach ($sellers as $seller): ?>
            <tr>
              <td><img src="<?php print user_picture($seller['user_id']); ?>" height="30" /></td>
              <td><?php print user_name($seller['user_id']); ?></td>
              <td><?php print ($seller['price']); ?></td>
              <td><a class="mw-ui-btn" href="<?php print content_link(); ?>?buy_art=<?php print $id ?>">Buy</a></td>
            </tr>
            <?php endforeach; ?>
          </table>
          <?php endif ?>
        </div>
      </div>
      <div class="mw-ui-col" style="width:55%">
        <div class="mw-ui-col-container">
          <div class="product-description">
            <div class="item-box pad">
              <h2 class="post-title" style="padding: 20px 0 10px;">
                <?php if (!empty($data)): ?>
                <?php print $data['2']['F2'] ?> <?php print $data['1']['F2'] ?>
                <?php endif ?>
              </h2>
               <hr>
              <div class="product-description">
                <p class="element">
                  <?php if (!empty($data)): ?>
                <table border="0">
                  <?php foreach ($data as $item): ?>
                  <tr>
                    <td><?php print $item['F1'] ?></td>
                    <td><?php print $item['F2'] ?></td>
                    <td><?php print $item['F3'] ?></td>
                  </tr>
                  <?php endforeach; ?>
                </table>
                <?php endif ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="item-box" id="product-related">
    <h2 class="section-title element">Related Products</h2>
    <hr>
    <module type="shop/products" template="horizontal_slider" id="related-products-module" related="true" limit="7"
                ajax-paging="true"
                data-show="thumbnail,title,add_to_cart,price"/>
  </div>
</div>
