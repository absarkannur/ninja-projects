import { View, Text, StyleSheet, Alert, FlatList, SafeAreaView, Image, TouchableOpacity } from 'react-native'
import React, { useState } from 'react'
import AppWrapper from '@/components/AppWrapper'
import { Const } from '@/constants/Const'
import Button from '@/components/Button'
import { Colors } from '@/constants/Colors'

import { Data} from '@/constants/data'
import { router, Redirect } from 'expo-router'

export default function BrandsScreen() {

    type ItemProps = { id: string, title: string, logo: string };

    const [ brands, setBrands ] = useState<any>([]);
    
    const handleBrand = ( value: string ) => {
        
        let newBrands = brands;
        newBrands.push( value );
        setBrands( newBrands );
    
    }

    const handleNext = () => {
        router.push('/(profile)/finish.screen');
    }

    const Item = ({id, title, logo}: ItemProps) => (
        <TouchableOpacity onPress={ () => handleBrand( id ) }>
            <View style={ Styles.brand }>
                <Image style={{ width: 100, height: 100, resizeMode: 'contain' }} source={{ uri: logo }} />
            </View>
        </TouchableOpacity>
    );

    return (
        <SafeAreaView style={ Styles.safearea }>
            <View style={ Styles.container }>

                <View style={ Styles.topWrapper }>
                    <Text style={ Styles.header }>What's your favourite brands</Text>
                    <Text>Let us know about your self</Text>
                </View>

                <View style={ Styles.wrapper }>
                    
                    <FlatList
                        numColumns={3}
                        data={ Data }
                        renderItem={({item}) => <Item id={ item.brand_name } title={item.brand_name} logo={item.image} />} />

                </View>

                <View style={ Styles.bottomWrapper }>
                    <Button title="Done" onPress={ handleNext} />
                </View>

            </View>
        </SafeAreaView>
    )
}

const Styles = StyleSheet.create({
    safearea: {
        flex: 1,
        backgroundColor: Colors.light.innerBackground
    },
    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center',
        padding: Const.padding.appInnerPadding,
    },
    topWrapper: {
        height: 150,
        width: '100%'
    },
    wrapper: {
        flex: 6,
        width: '100%',
    },
    bottomWrapper: {
        flex: 1,
        width: '100%',
        alignItems: 'center',
        justifyContent: 'flex-end'
    },
    header: {
        fontFamily: 'Montserrat-Bold',
        fontSize: 30,
        marginTop: 20,
        marginBottom: 5,
        textAlign: 'left',
    },
    brand: {
        width: 100,
        height: 100,
        backgroundColor: '#fff',
        borderColor: '#aaa',
        borderWidth: 1,
        borderRadius: 120,
        alignItems: 'center',
        justifyContent: 'center',
        margin: 10,
        overflow: 'hidden'
    }
});