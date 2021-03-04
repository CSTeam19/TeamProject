pip install keepa
import keepa
accesskey = 'bd9k0166uld4djtmu4agpe8g1vs4731jpenjjn4ek84785ir0045lt7q0090l378' # enter real access key here
api = keepa.Keepa(accesskey)

# Single ASIN query
products = api.query('B0088PUEPK') # returns list of product data

# Plot result (requires matplotlib)
keepa.plot_product(products[0])
products = await api.query('059035342X')

# Available keys
print(products[0].keys())

# Print ASIN and title
print('ASIN is ' + products[0]['asin'])
print('Title is ' + products[0]['title'])