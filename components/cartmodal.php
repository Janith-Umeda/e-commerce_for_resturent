<?php function foot(){
    return "";    
}?>


<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cartModalLabel">
                    <i class="bi bi-cart"></i>
                    Your Cart
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-5">
                    <div class="card">
                        <div class="card-body p-lg-5 resp-table">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">count</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider" id="cartbody">
                                    <!-- <tr>
                                        <td scope="row">1</td>
                                        <td>sdgfsd</td>
                                        <td>Jambo nut</td>
                                        <td>323</td>
                                        <td>3</td>
                                        <td>234</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <!-- Search Results hear -->
                            <?php echo foot()?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="clear_cart">Clear and Close</button>
                <button type="button" class="btn btn-primary">Check out</button>
            </div>
        </div>
    </div>
</div>