<div id="app-wishlist">
    <?php
    require_once 'header.php'; ?>
  <main>
    <div class="container">
      <div class="p-2">
        <h5 id="cartTitle">
          Shopping Cart (2 Items)
        </h5>
        <table class="table">
          <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col" class="text-center">Quantity</th>
            <th scope="col" class="text-center">Price</th>
            <th scope="col"></th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>
              <div class="d-flex ">
                <img class="img-fluid rounded-1" src="public/img/hoodie-with-logo.jpg" width="96" alt="hoodie-with-logo">
                <p class="mx-2 mb-0 ">
                  Hoodie with logo
                </p>
              </div>
            </td>
            <td class="text-center">
              <div class="btn-group d-flex align-items-center" role="group">
                <button type="button" class="btn shadow-none">-</button>
                <span class="mx-2">1</span>
                <button type="button" class="btn shadow-none">+</button>
              </div>
            </td>
            <td class="text-center py-3"><span>$</span><span>45.00</span></td>
            <td>
              <button class="btn shadow-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
                     viewBox="0 0 16 16">
                  <path
                    d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                </svg>
              </button>
            </td>
          </tr>
          <tr>
            <td>
              <div class="d-flex">
                <img class="img-fluid rounded-1" src="public/img/beanie.jpg" width="96" alt="beanie">
                <p class="mx-2 mb-0">
                  Beanie
                </p>
              </div>
            </td>
            <td class="text-center">
              <div class="btn-group d-flex align-items-center" role="group">
                <button type="button" class="btn shadow-none">-</button>
                <span class="mx-2">1</span>
                <button type="button" class="btn shadow-none">+</button>
              </div>
            </td>
            <td class="text-center py-3"><span>$</span><span>18.00</span></td>
            <td>
              <button class="btn shadow-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
                     viewBox="0 0 16 16">
                  <path
                    d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                </svg>
              </button>
            </td>
          </tr>

          </tbody>
          <tfoot>
          <tr class="fw-bold px-4">
            <td class="text-center">
              Total:
            </td>
            <td class="text-center">2</td>
            <td class="text-center"><span>$</span><span>63.00</span></td>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </main>
