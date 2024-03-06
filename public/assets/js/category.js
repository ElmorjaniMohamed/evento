// delete advert

$("#categoryTable").on("click", ".deleteButton", function() {
    const categoryId = $(this).data("id");

    if (categoryId) {
        Swal.fire({
            title: "Are you sure?",
            text: "Once deleted, You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                // Suppression de l'annonce via une requête AJAX
                $.ajax({
                    url: `categories/${categoryId}`,
                    type: "DELETE",
                    success: function(response) {
                        if (response.status === "success") {
                            // Annonce supprimée avec succès
                            Swal.fire({
                                title: "Deleted!",
                                text: "Advert has been deleted.",
                                icon: "success",
                                timer: 1500,
                            });

                            // Supprimer la ligne du tableau correspondant à l'annonce supprimée
                            $(`#caterory_${categoryId}`).remove();
                        } else {
                            // Échec de la suppression
                            Swal.fire({
                                title: "Failed!",
                                text: "Unable to delete Advert!",
                                icon: "error",
                            });
                        }
                    },
                    error: function(error) {
                        // Erreur lors de la requête AJAX
                        Swal.fire({
                            title: "Failed!",
                            text: "Unable to delete Advert!",
                            icon: "error",
                        });
                    },
                });
            }
        });
    }
});
