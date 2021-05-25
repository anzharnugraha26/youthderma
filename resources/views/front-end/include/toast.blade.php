@if(Session::has('with'))

<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
</script>

@endif


@if(Session::has('coming-soon'))

<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Coming Soon!',
  showConfirmButton: false,
  timer: 1500
})
</script>

@endif