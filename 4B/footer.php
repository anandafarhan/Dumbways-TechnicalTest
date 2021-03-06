<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function() {
      $('#bookDataTable').DataTable();
   });
   $(document).ready(function() {
      $('#categoryDataTable').DataTable();
   });

   $('.edit').on('click', function(e) {
      let name = $(this).data('name');
      let stock = $(this).data('stock');
      let desc = $(this).data('desc');
      let id = $(this).data('id');
      $('#editModal').modal('show');
      $('#name').val(name);
      $('#stock').val(stock);
      $('#desc').val(desc);
      $('#edid').attr('value', id);
   });

   $('.editcat').on('click', function(e) {
      let name = $(this).data('name');
      let id = $(this).data('id');
      $('#editCatModal').modal('show');
      $('#catname').val(name);
      $('#editcat').attr('value', id);
   });

   $('.del').on('click', function(e) {
      let product = $(this).data('product');
      let tipe = $(this).data('tipe');
      let id = $(this).data('id');
      $('#modalDelete').modal('show');
      $('#product').html(product);
      $('#tipe').attr('value', tipe);
      $('#delid').attr('value', id);
   });

   const btnPinjam = document.querySelectorAll('.btn-pinjam');
   btnPinjam.forEach(function() {
      if (this.dataset.stock === 0) {
         this.disabled = true;
      }
   })
</script>
</body>

</html>