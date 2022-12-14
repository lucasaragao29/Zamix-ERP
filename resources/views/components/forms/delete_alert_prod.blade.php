<script>
Swal.fire({
    title: 'Desejas Excluir o produto?',
    showDenyButton: true,
    showCancelButton: true,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire('Saved!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
</script>
